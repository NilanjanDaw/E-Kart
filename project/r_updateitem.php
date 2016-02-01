<?php
session_start();
if(isset($_SESSION["name"]))
{
    echo "<p align='right'>[Welcome ".strtolower($_SESSION['name']).",<a href='logout_admin.php'>logout]</a></p>";
    echo '<form><table border="2" width="50%" align="center">
<tr>
<td colspan="2">
<center>
<h3>Enter the Product ID</h3>
</center>
</td>
</tr>





<td align="center">
PRODUCT ID
</td>
<td align="center">
<input type="text" name="txt_pid" placeholder="enter the pid"/>
</td>
</tr>
<tr>
<tr>
<td align="center" colspan="2">
<input type="submit" name="btn_additem" value="UPDATE"/>
</tr>
</table>
</form>';
if(isset($_GET["btn_additem"]))
{
  header("location: finalupdate.php?pid=".$_GET["txt_pid"]);

}
}
else
{
    session_destroy();
    header("location: error.php");
}

?>