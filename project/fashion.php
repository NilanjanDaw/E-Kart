<?php
if(isset($_SESSION["name"]))
{
   echo '<p align="right">
[welcome '.$_SESSION["name"].',<a href="logout_user.php">logout</a>
]</p>'; 
include("includefashion.php");
}
else
{
    echo '<p align="right">
[welcome guest]</p>'; 
include("includefashion.php");
}
?>