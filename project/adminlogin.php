<head>
<title>Online Shopping India - Shop Online for Books, Mobile Phones, Digital Cameras, Watches, Clothes; More at e-kart.com</title>
</head>
<body link="maroon" vlink="maroon" bgcolor="#D7FFFF">
<?php
include("header.php");
?>

<h1><u><font face="verdana">ADMIN LOGIN</font></u></h1>
</center>
<br />
<br />
<form>
<table>
<tr>
<td><font face="verdana">User Name</font></td><td><input type="text" name="txt_adminlogin" placeholder="enter name"/></td><br />
</tr>
<tr>
<td><font face="verdana">Password</font></td><td><input type="password" name="txt_adminpwd" placeholder="password"/></td><br />
</tr>
<tr>
<td colspan="2"><input type="submit" name="btn_adminsubmit" value="Sign In" style="color: maroon;"/><br /></td>
</tr>
</table>
</form>
<br /><br /><br /><br /><br />
<center><a href="adminsignup.php" ><font face="verdana">Click here to Signup as a new Admin</a></center></font><br /><br /><br />
<br />
<?php
include("footer.php");
?>
</body>
<?php
if(isset($_GET["btn_adminsubmit"]))
{
    function encrypt($pd)
{
    $pwd=str_split($pd);
    for($i=0;$i<sizeof($pwd);$i++)//encrypt
    $pwd[$i]=chr(ord($pwd[$i])+25);
    $p1=implode("",$pwd);
    return $p1;
    
}
    $link=mysql_connect("localhost","root","");
    mysql_select_db("project");
    $q="select password from adminlogin         where name='".$_GET["txt_adminlogin"]."'        ";
    $res=mysql_query($q);
    $val=mysql_fetch_row($res);
    $p=encrypt($_GET["txt_adminpwd"]);
    if(strcmp($val[0],$p)==0)
    {
        session_start();
        $_SESSION["name"]=$_GET["txt_adminlogin"];
        header("location: redirect.php");
    }
    else
    {
        header("location: error.php");
    }
}
?>