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
<form method="post">
<div id="search" style="width: 80%; height: 30%; float: left;"> 
<input type="text" name="txt_search" placeholder="Search for a product category or brand" style="width: 100%; height:40px;"/>
</div>
<div id="s_btn" style="width: 20%; height: 30%;float: left;"> 
<input class="change" type="submit" name="btn_search" value="SEARCH" style="height: 45px;"/>
</div>
</form>
<div>
<marquee id="mar" direction="right" heigth="10%" width="100%" truespeed="true" scrollamount="5px" behavior="alternate">
<a href="mobile.php"><img class="imagehead" src="banner1.jpg" height="240px" width="480px" /></a>
<a href="computer.php"><img class="imagehead" src="banner2.jpg" height="240px" width="480px"/></a>
<a href="tablet.php"><img class="imagehead" src="banner3.jpg" height="240px" width="480px"/></a>
<a href="laptop.php"><img class="imagehead" src="banner4.jpg" height="240px" width="480px"/></a>
</marquee>
</div>
<?php
if(isset($_POST["btn_search"]))
{
    setcookie("search","true");
    setcookie("search_query",$_POST["txt_search"]);
    header("Location:phptry.php");
}
$c="false";$t="false";$n="false";
$link=mysql_connect("localhost","root","")
or die ("error connect");
$db=mysql_select_db("project",$link) or die ("error in selection");
$q="select * from electronics order by type,company,name";
if(@strcmp($_COOKIE["search"],"true")==0)
{
    $q="select * from electronics";
    $result=mysql_query($q) or die ("error in query fire line 37");
    $s=explode(" ",$_COOKIE["search_query"]);
    while($r=mysql_fetch_array($result))
    {
        foreach($s as $v)
        {
            if(strcasecmp($v,$r["type"])==0)
            $t=$r["type"];
            else if(strcasecmp($v,$r["company"])==0)
            $c=$r["company"];
            else if(strcasecmp($v,$r["name"])==0)
            $n=$r["name"];
        }


    }
    //echo $t." ".$c." ".$n.'</br>';
    $q="select * from electronics where";
    if(strcmp($t,"false") || strcmp($c,"false") || strcmp($n,"false"))
    {
    if((strcmp($t,"false")))
    $q=$q." type='".$t."'";
    if((strcmp($c,"false")))
    {
        if((strcmp($t,"false")))
    $q=$q." and company='".$c."'";
    else
    $q=$q." company='".$c."'";
    }
    if((strcmp($n,"false")))
    {
        if((strcmp($t,"false")) || (strcmp($t,"false")))
    $q=$q." and name='".$c."'";
    else
    $q=$q." name='".$c."'";
    }
    }
    else
    $q="select * from electronics order by type,company,name";
    //echo $q.'</br>';
}
$result=mysql_query($q) or die ("error in query fire line 75 ".mysql_error());
$z="";
$b="";
$ctr=0;
while($row1=mysql_fetch_array($result))
{   
    //echo $b.' '.$row1["type"].'<br>';
    //echo strcmp($b,$row1["type"]);
    if(strcmp($b,$row1['type'])!=0)
    {
        if($ctr!=0)
        echo '<div style="width:'.$ctr.'%; height:300px"></div>';
        echo '<div class="C3" style="width:100%!important;height:50px!important;">';
        echo '<center class="neonr">'.ucwords($row1['type']).'</center>';
        echo '</div>';
        echo '</br>';
        $b=$row1['type'];
        $ctr=0;
    }
    echo '<div style="width:100%">';
    if(strcmp($z,$row1['company'])!=0)
    {   
        if($ctr!=0)
        echo '<div style="width:'.$ctr.'%; height: 300px;"></div>';
        echo '<div class="C3" style="width:100%!important;height:25px!important;">';
        echo '<center>'.$row1['company'].'</center>';
        echo '</div>';
        $z=$row1['company'];
        $ctr=0;
        
    }
        echo '<div style="float:left; width: 20%; height: 250px">';
         echo '<figure>';
         echo '<img src="'.$row1['image'].'" width="180px" height="240px" />'; 
         echo '<figcaption >';
         echo '<form method="POST">';
         echo '<input type="submit" name="c_submit" value="'.$row1['name'].'">';
         echo '<input type="hidden" name="hide" value="'.$row1['pid'].'">';
         echo '</form>';
    echo '</figcaption>';
    echo '</figure>';
    echo '</div>';
    $ctr+=20;
    echo '</div>';
}
if(isset($_POST["c_submit"]))
{
    setcookie("proid",$_POST["hide"]) or die("error in setting cookie");
    header("location:buy.php");
}
echo '<div style="width:'.$ctr.'%; height: 300px;"></div>';
include("footer.php");
?>
</div>