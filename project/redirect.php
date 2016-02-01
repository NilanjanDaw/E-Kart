<?php
session_start();
if(isset($_SESSION["name"]))
{
    echo "<p align="."right".">
<font face=".'arial'.">
[welcome ".strtolower($_SESSION["name"]).",<a href=".'logout_admin.php'.">logout</a>]
</font>
</p>
<h2>Redirect to:-</h2>
<ul type="."disc".">
<li><a href=".'r_additem.php'.">Add a new item</a></li>
<li><a href=".'r_updateitem.php'.">Update item</a></li>
</ul>";
}
else
{
    session_destroy();
    header("location: error.php");
}
?>