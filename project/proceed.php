<!DOCTYPE html>
<html>
<head>
<title> ONLINE SHOPPING IN INDIA</title>
<meta name="keywords" content="online shopping,shopping" />
<link rel="stylesheet" type="text/css" href="style1.css" />
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
<marquee id="mar" direction="right" heigth="10%" width="100%" truespeed="true" scrollamount="5px" behavior="alternate">
<a href="mobile.php"><img class="imagehead" src="banner1.jpg" height="240px" width="480px" /></a>
<a href="computer.php"><img class="imagehead" src="banner2.jpg" height="240px" width="480px"/></a>
<a href="tablet.php"><img class="imagehead" src="banner3.jpg" height="240px" width="480px"/></a>
<a href="laptop.php"><img class="imagehead" src="banner4.jpg" height="240px" width="480px"/></a>
</marquee>
</div>


<div>
<h1 class="c4" align="center"> PRODUCT DETAILS </h1>
</div>

<?php
$p=$_COOKIE["user"]; 
$link=mysql_connect("localhost","root","")
or die ("error connect");
$db=mysql_select_db("project",$link) or die ("error in selection");
$q="select * from user where email='".$p."'";
$result=mysql_query($q) or die ("error in query fire");
$row=mysql_fetch_array($result); 
$x=$_COOKIE["pwd"];
$y=$_COOKIE["user"];
if($x!="" && $y!="")
{
    echo '<h1> THE DETAILS : </h1>';
    echo 'ADDRESS :';
    echo '<label>';
    echo $row['address'];
    echo '</label>'; 
    echo 'CONTACT INFO :'.$row['contact_no'];
}
else
{
  echo ' You cannot procceed without signing up';
  header("location:signup.php");
}
echo '<form method="POST" action="final.php">';
echo '<input type="submit" name="final_submit" value="PROCEED">';
echo '</form>';
include("footer.php");
?>