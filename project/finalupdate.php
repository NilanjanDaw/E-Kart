<?php
session_start();
if(isset($_SESSION["name"]))
{
    echo "<p align='right'>[Welcome ".strtolower($_SESSION['name']).",<a href='logout_admin.php'>logout]</a></p>";
    $link=mysql_connect("localhost","root","");
    mysql_select_db("project"); 
    $q="select * from electronics where pid='".$_GET['pid']."'";
    $result=mysql_query($q) or die ("error in 7".mysql_error());
    
    $r=mysql_fetch_array($result) or die(mysql_error());
    setcookie("p",$r['pid']);setcookie("t",$r['type']);setcookie("s",$r['stock']);
    echo '<form action="z.php"><table border="2" width="50%" align="center">
<tr>
<td colspan="2">
<center>
<h3>UPDATE</h3>
</center>
</td>
</tr>



<tr>
<td align="center">
NAME
</td>
<td align="center">
<input type="text" name="txt_eaddname" value="'.$r['name'].'"/>
</td>
</tr>
<tr>
<td align="center">
BRAND
</td>
<td align="center">
<input type="text" name="txt_eaddbrand" value="'.$r['company'].'"/>
</td>
</tr>
<tr>
<td align="center">
PRICE
</td>
<td align="center">Rs.
<input type="text" name="txt_eaddprice" value="'.$r['price'].'"/>
</td>
</tr>
<tr>
<td align="center">
DETAILS
</td>
<td align="center">
<textarea name="details" row="2" cols="50" >'.$r['details'].'
</textarea>
</td>
</tr>
<tr>
<td align="center">
IMAGE
</td>
<td align="center">
<input type="text" name="txt_image" value="'.$r['image'].'"/>
</td>
</tr>
<tr>

<td align="center">
VIDEO LINK
</td>
<td align="center">
<input type="text" name="txt_video" value="'.$r['video'].'"/>
</td>
</tr>
<tr>

<td align="center">
PRODUCT ID
</td>
<td align="center">
<input type="text" name="txt_pid" value="'.$r['pid'].'"/>
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
}
else
{
    session_destroy();
    header("location: error.php");
}

?>