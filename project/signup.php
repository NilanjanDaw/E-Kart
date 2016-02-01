

<!DOCTYPE html>
<script language="javascript">
function blank_check()
{
    var v=document.getElementById("txt_name").value;
    if(v.length==0)
    {
        document.getElementById("lbl_nm").innerHTML="Empty field";
    }
    else if(v.length!=0)
    document.getElementById("lbl_nm").innerHTML="";
}
function password_check()
{
     var v1=document.getElementById("txt_pwd").value;
      var v2=document.getElementById("cn_pwd").value;
      if(v1!=v2)
      {
        alert("Passwords donot Match!");
        document.getElementById("pass1").style.borderColor = "#E34234";
        document.getElementById("pass2").style.borderColor = "#E34234";
        return false;
      }
      return true;
      }

</script>
<html>
<head>
<title> ONLINE SHOPPING IN INDIA</title>
<meta name="keywords" content="online shopping,shopping" />
<link rel="stylesheet" type="text/css" href="style1.css" />
<!--<link rel="stylesheet" type="text/css" href="loginstyle.css" />-->
</head>
<body> 
<div id="container" style="width: 100%;">
<div class="c1"><a class="C3" href="divtry.php">HOME</a></div>
<div  class="c1"><a class="C3" href="about.php">ABOUT US</a></div>
<div  class="c1"><a class="C3" href="contact.php">CONTACT US</a></div>
<div  class="c1"><a class="C3" href="signup.php">SIGN UP</a></div>
<div  class="c1"><a class="C3" href="login.php">LOGIN</a></div>
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
<h2 style="color: #0080FF;">New User? SIGN UP NOW. <br> It's FREE!</h2>
</div>
<div style="width: 400px;height: 100px;float: right;">
<h2 style="color: olive ">OTHER LINKS</h2>
<ol>
<li><a href="phptry.php" style="color: rgb(0,255,0)"><font color="FF00CC">Samsung</a></li>
<li><a href="phptry.php" style="color: rgb(0,255,0)"><font color="FF00CC"> Nokia</a></li>

</ol>
</div>
<form method="post" >
<table>
<tr><td>NAME: <label style="color: red;"> * </label></td> 
<td>
<input style="width: 200px;" type="text" id="txt_name" name="txt_name" placeholder="Enter your name"  > <label id="lbl_nm"> * </label> </td>

</tr>
<tr>
  <td>
    <label>EMAIL ID:<label style="color: red;"> * </label></label>
  </td>
  <td>
     <input style="width: 200px;" type="text" id="txt_id" name="txt_id" placeholder="E-mail id " onmouseover="blank_check()"/>
  </td>
</tr>
<tr>
  <td>
    <label>PASSWORD:<label style="color: red;"> * </label></label>
  </td>
  <td>
    <input style="width: 200px;" type="password" id="txt_pwd" name="txt_pwd" placeholder="Password"/> <label id="lbl_pwd"></label>
  </td>
</tr>
<tr>
<td><label>CONFIRM PASSWORD: <label style="color: red;"> * </label> </label></td>
<td><input style="width: 200px;" type="password" id="cn_pwd" name="cn_pwd" placeholder="Confirm Password" /> <label id="lbl_pwd"></label></td>
</tr>

<tr>
<td><label onfocus="password_check(this)">ADDRESS  </label></td>
<td><textarea id="address" name="address" rows="4" cols="50" placeholder="Enter your address" ></textarea></td>
</tr>

<tr>
<td><label>CONTACT NUMBER: <label style="color: red;"> * </label></label></td>
<td><input type="text" id="cn_info" name="cn_info"  placeholder="Enter contact number"/></td>
</tr>



<tr> 
  <td colspan="2" align="center">
    <input type="submit" name="btn_signup" value="SIGN UP"/>
  </td>
</tr>
<tr>
  <td colspan="2">
  <h4>Already have an account?<a href="login.php"> LOG IN HERE</a></h4>
  </td>
</tr>
</table>
</form>
<div id="footer" style="background-color: #ffa500; clear: both;text-align: center;">
Copyright &copy; Swarnadeep &amp; Nilanjan</div>

</div>
</body>
</html>
<?php
if(isset($_POST["btn_signup"]))
{
    function encrypt($pd)
{
    $pwd=str_split($pd);
    for($i=0;$i<sizeof($pwd);$i++)//encrypt
    $pwd[$i]=chr(ord($pwd[$i])+25);
    $p1=implode("",$pwd);
    return $p1;
    
}
$link=mysql_connect("localhost","root","") or die("Connection error mysql");
mysql_select_db("project") or die("Connection error database");
$n=$_POST["txt_name"];
$id=$_POST["txt_id"];
$p=$_POST["txt_pwd"];
$a=$_POST["address"];
$cn=$_POST["cn_info"];
$p=encrypt($p);
$q="insert into user values('".$n."','".$id."','".$p."','".$a."','".$cn."')";
$rec=mysql_query($q) or die("error in query fire");//firing query
setcookie("user",$id);
setcookie("pwd",$p);
if(strlen($_COOKIE['proid'])==0)
{
    
   header("location:afterlogin.php");
}
else

header("location:proceed.php");
}
include("footer.php");
?>