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
$p=$_COOKIE["proid"]; 
$c="Nokia";$t="mobile";$n="lumia 520";
$link=mysql_connect("localhost","root","")
or die ("error connect");
$db=mysql_select_db("project",$link) or die ("error in selection");
$q="select * from electronics where pid='".$p."'";
$result=mysql_query($q) or die ("error in query fire");
$row=mysql_fetch_array($result);
?>
<div style="width: 100%;">
<?php
echo '<div style="float: left; width: 30%;">
<img src="'.$row["image"].'" height="350px" width="350px"/>
</div>
<div style="float: left; width:50%;">
<h1 class="c4" align="left">'.$row["company"].' '.$row['name'].'</h1>
</div></br>';
echo ' <br> <br> <br><br> <div style="float: left width:70%;">
<p align="justify"> <h2 class="neonr" >PRICE:</h2> Rupees '.$row["price"].'
<br /> 
<h2 class="neonb">PRODUCT ID:</h2>'.$row["pid"].'
<br />
<div style=" float:left ;width=20px;">
<h2 class="neong">DETAILS :</h2>'.$row["details"].'
<br /> </div>';
echo '<div style="float: right; width=50px;">';
echo '<h2 class="neong">Video Link:</br></h2>';
echo '<iframe width="480px" height="320px" src="'; 
echo "http://".$row["video"];
echo '" frameborder="0" allowfullscreen ></iframe>';
echo '</div>';
echo '</p>';
echo '<form method="POST" action="proceed.php">';
echo '<div id="s_btn" style="width: 50%; height: 30%;float: left;"> 
<input class="change" type="submit" name="btn_buy" value="BUY" style="height: 25px; width:80px"/>
</div>';
echo '</form></div>';
include("footer.php");
?>
</div>
</div>
</body>
</html>