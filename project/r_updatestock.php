<center>
<h1>Update Stock</h1>
</center>
<?php
session_start();
if(isset($_SESSION["name"]))
{
    echo "<p align='right'>[Welcome ".strtolower($_SESSION['name']).",<a href='logout_admin.php'>logout]</a></p>";
    echo '<form><table border="2" width="50%" align="center">
<tr>
<td colspan="2">
<center>
<h3>Update Stock</h3>
</center>
</td>
</tr>
<tr>
<td align="center">
PRODUCT
</td>
<td align="center">
<select name="ddl_additem">
<option>Select type</option>
<option value="fs_me">Mens fashion</option>
<option value="fs_wo">Womens fashion</option>
<option value="el_la">Laptops</option>
<option value="el_mo">Mobiles</option>
<option value="bo_bo">Books</option>
</select>
</td>
</tr>
<tr>
<td align="center">
TYPE OF UPDATE
</td>
<td align="center">
<select name="ddl_type">
<option>Select Here</option>
<option value="add">Add to Stock</option>
<option value="rem">Remove from Stock</option>
</select>
</td>
</tr>
<tr>
<td align="center">
AMOUNT
</td>
<td align="center">
<input type="text" name="txt_ustockno" value="0"/>Nos.
</td>
</tr>
<tr>
<td align="center" colspan="2">
<input type="submit" name="btn_updatestock" value="update stock"/>
</td>
</tr>
</table></form>';
session_destroy();
if(isset($_GET["btn_updatestock"]))
{
    $link=mysql_connect("localhost","root","");
    mysql_select_db("project");
    $pid=$_GET["ddl_additem"];
    $type=$_GET["ddl_type"];
    $amount=$_GET["txt_ustockno"];
    $q="select stock from stock where pid=".$pid;
    $result=mysql_query($q);
    $a=mysql_fetch_row($result);
    switch($type)
    {
        case "add":
        $stock=$a[0]+$amount;
        break;
        case "rem":
        $stock=$a[0]-$amount;
    }
    $q="update stock set stock=".$stock." where pid=".$pid;
    $res=mysql_query($q);
}

}
else
{
    header("location: error.php");
}
session_destroy();
?>