<html>
<head>
<title> FINAL AGE </title>
<link rel="stylesheet" type="text/css" href="style1.css" />
</head>

<body>
<h1 class="neong" align="center">
<br />
<br />
<br />
YOUR DEAL HAS BEEN FINALISED. <br /> THANK YOU. <br> PLEASE VISIT AGAIN.
</h1>
</body>
</html>
<?php
$d=$_COOKIE["proid"];
$link=mysql_connect("localhost","root","");
    mysql_select_db("project");
$q="select * from electronics where pid='".$d."'";
$result=mysql_query($q) or die(mysql_error());
$r1=mysql_fetch_array($result);
$dd=$r1['stock'];
$dd=$dd-1;
$q="update electronics set stock=".$dd." where pid='".$d."'";
$result=mysql_query($q) or die(mysql_error());

setcookie("user",0,time()-10);
setcookie("pwd",0,time()-10);
setcookie("proid",0,time()-10);

include("footer.php");
?>
