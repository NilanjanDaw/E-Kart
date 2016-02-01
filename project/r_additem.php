<?php
session_start();
if(isset($_SESSION["name"]))
{
    echo "<p align='right'>[Welcome ".strtolower($_SESSION['name']).",<a href='logout_admin.php'>logout]</a></p>";
    echo '<form><table border="2" width="50%" align="center">
<tr>
<td colspan="2">
<center>
<h3>Add a new Item</h3>
</center>
</td>
</tr>
<tr>
<td align="center">
TYPE
</td>
<td align="center">
<select name="z">
<option>Select type</option>
<option value="laptop">laptop</option>
<option value="mobile">mobile</option>
<option value="computer">computer</option>
</select>
</td>
</tr>
<tr>
<td align="center">
NAME
</td>
<td align="center">
<input type="text" name="txt_eaddname" placeholder="enter name of product"/>
</td>
</tr>
<tr>
<td align="center">
BRAND
</td>
<td align="center">
<input type="text" name="txt_eaddbrand" placeholder="brand name"/>
</td>
</tr>
<tr>
<td align="center">
PRICE
</td>
<td align="center">Rs.
<input type="text" name="txt_eaddprice" placeholder="0"/>
</td>
</tr>
<tr>
<td align="center">
DETAILS
</td>
<td align="center">
<textarea name="details" row="2" cols="50" >
</textarea>
</td>
</tr>
<tr>
<td align="center">
IMAGE
</td>
<td align="center">
<input type="text" name="txt_image" placeholder="Enter the image link">
</td>
</tr>
<tr>

<td align="center">
VIDEO LINK
</td>
<td align="center">
<input type="text" name="txt_video" placeholder="enter video link of product"/>
</td>
</tr>
<tr>

<td align="center">
PRODUCT ID
</td>
<td align="center">
<input type="text" name="txt_pid" placeholder="enter the pid"/>
</td>
</tr>
<tr>

<td align="center">
STOCK
</td>
<td align="center">
<input type="text" name="txt_stock" placeholder="enter the stock"/>
</td>
</tr>
<tr>
<td align="center" colspan="2">
<input type="submit" name="btn_additem" value="add item"/>
</tr>
</table>
</form>';
if(isset($_GET["btn_additem"]))
{
    $link=mysql_connect("localhost","root","");
    mysql_select_db("project");
    $type=$_GET["z"];
    $name=$_GET["txt_eaddname"];
    $brand=$_GET["txt_eaddbrand"];
    $price=$_GET["txt_eaddprice"];
    $details=$_GET["details"];
    $image=$_GET["txt_image"];
    $video=$_GET["txt_video"];
    $stock=$_GET["txt_stock"];
    $pid=$_GET["txt_pid"];
    $q="insert into electronics values("."'".$type."','".$brand."','".$name."','".$pid."',".$price.",'".$details."','".$image."','".$video."',".$stock.")";
    $result=mysql_query($q) or die("Error in insertion");

}
}
else
{
    session_destroy();
    header("location: error.php");
}

?>