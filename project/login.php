<!DOCTYPE html>
<html>
<head>
<title> ONLINE SHOPPING IN INDIA</title>
<meta name="keywords" content="online shopping,shopping" />
<link rel="stylesheet" type="text/css" href="style1.css" />
<!--<link rel="stylesheet" type="text/css" href="loginstyle.css" />-->
</head>
<body>
<div id="container" style="width: 100%;">
<div id="opn1" class="c1"><a class="C3" href="divtry.php">HOME</a></div>
<div id="opn2" class="c1"><a class="C3" href="about.php">ABOUT US</a></div>
<div id="opn3" class="c1"><a class="C3" href="contact.php">CONTACT US</a></div>
<div id="opn4" class="c1"><a class="C3" href="signup.php">SIGN UP</a></div>
<div id="opn5" class="c1"><a class="C3" href="login.php">LOGIN</a></div>
<div id="search" style="width: 80%; height: 30%; float: left;"> 
<input type="text" name="txt_search" placeholder="Search for a product category or brand" style="width: 100%; height:40px;"/>
</div>
<div id="s_btn" style="width: 20%; height: 30%;float: left;"> 
<input class="change" type="submit" name="btn_search" value="SEARCH" style="height: 45px;"/>
</div>
<div>
<marquee id="mar" direction="right" heigth="10%" width="100%" truespeed="true" scrollamount="5px"behavior="alternate">
<a href="mobile.php"><img class="imagehead" src="banner1.jpg" height="240px" width="480px" /></a>
<a href="computer.php"><img class="imagehead" src="banner2.jpg" height="240px" width="480px"/></a>
<a href="tablet.php"><img class="imagehead" src="banner3.jpg" height="240px" width="480px"/></a>
<a href="laptop.php"><img class="imagehead" src="banner4.jpg" height="240px" width="480px"/></a>
</marquee>
</div>
<div style="width: 400px;height: 100px;float: left;">
<h2 style="color: #0080FF;">Login</h2>
</div>
<form method="post">
<table>
<tr>
  <td>
    <label>Email id:</label>
  </td>
  <td>
     <input type="text" name="txt_id" placeholder="E-mail id"/>
  </td>
</tr>
<tr>
  <td>
    <label>Password:</label>
  </td>
  <td>
    <input type="password" name="txt_pwd" placeholder="Password"/>
  </td>
</tr>
<tr> 
  <td colspan="2" align="center">
    <input type="submit" name="btn_login" value="Login"/>
  </td>
</tr>
<tr>
  <td>
  <h4>Dont have an account?<a href="signup.php">Sign Up</a></h4>
  </td>
</tr>
</table>
</form>
<?php
    function encrypt($pd)
{
    $pwd=str_split($pd);
    for($i=0;$i<sizeof($pwd);$i++)//encrypt
    $pwd[$i]=chr(ord($pwd[$i])+25);
    $p1=implode("",$pwd);
    return $p1;
    
}
function redirect($url)
{
    header("Location:".$url);
}
if(isset($_POST["btn_login"]))
{
    $link=mysql_connect("localhost","root","") or die("Connection error mysql");
    mysql_select_db("project") or die("Connection error database");
    $id=$_POST["txt_id"];
    $q="select password from user where email='".$id."'";
$rec=mysql_query($q) or die("error in query fire");//firing query

$r=mysql_fetch_row($rec);
$p=encrypt($_POST["txt_pwd"]);
if($p==$r[0])
{
setcookie("user",$id);
setcookie("pwd",$p);
redirect("afterlogin.php");
}
else
{
    echo '<h1 style="color:red">Password Mismatch</h1>';
}
}
include("footer.php");
?>
</div>
</body>
</html>
