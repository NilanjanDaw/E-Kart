

<!DOCTYPE html>
<html>
<head>
<title> ONLINE SHOPPING IN INDIA</title>
<meta name="keywords" content="online shopping,shopping" />
<link rel="stylesheet" type="text/css" href="style1.css" />
<!--<link rel="stylesheet" type="text/css" href="loginstyle.css" />-->
</head>
<body> 
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
$q="insert into adminlogin values('".$n."','".$p."')";
$rec=mysql_query($q) or die("error in query fire");//firing query
    
   header("location:adminlogin.php");

}
include("footer.php");
?>