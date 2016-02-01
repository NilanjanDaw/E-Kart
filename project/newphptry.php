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
<?php
$c="Samsung";$t="mobile";$n="galaxy y";
$link=mysql_connect("localhost","root","")
or die ("error connect");
$db=mysql_select_db("project",$link) or die ("error in selection");
$q="select * from electronics order by type";
$result=mysql_query($q) or die ("error in query fire");
$z="";

while($row1=mysql_fetch_array($result))
{   echo '<div id="menu" style="height: 40%;width: 20%; float:left">';
   
    
    if(strcmp($z,$row1['company']))
    {   
        echo '<div style="width:100% height:10px">';
        echo $row1['company'];
        echo '</div>';
        echo "<br>";
        echo '<figure>';
        echo '<img src="'.$row1['image'].'" width="180px" height="240px" />'; 
        echo '<figcaption >';
        echo '<form method="POST">';
        echo '<input type="submit" name="c_submit" value="'.$row1['name'].'">';
       echo '<input type="hidden" name="hide" value="'.$row1['pid'].'">';
    echo '</form>';
    echo '</figcaption>';
    echo '</figure>';
        echo '<div>';
        $z=$row1['company'];
        echo '</div>';
        
    }
    else
    {
        
         echo '<figure>';
        echo '<img src="'.$row1['image'].'" width="180px" height="240px" />'; 
         echo '<figcaption >';
    echo '<form method="POST">';
    echo '<input type="submit" name="c_submit" value="'.$row1['name'].'">';
    echo '<input type="hidden" name="hide" value="'.$row1['pid'].'">';
    echo '</form>';
    echo '</figcaption>';
    echo '</figure>';
        echo '<div>';
        $z=$row1['company'];
        echo '</div>';
        
    }
   
    echo '</div>';
    
    
}
if(isset($_POST["c_submit"]))
{
    setcookie("proid",$_POST["hide"]) or die("error in setting cookie");
    header("location:buy.php");
}
?>