<?php
if(isset($_GET["btn_additem"]))
{
    $link=mysql_connect("localhost","root","");
    mysql_select_db("project");
    $name=$_GET["txt_eaddname"];
    $brand=$_GET["txt_eaddbrand"];
    $price=$_GET["txt_eaddprice"];
    $details=$_GET["details"];
    $image=$_GET["txt_image"];
    $video=$_GET["txt_video"];
    $pid=$_GET["txt_pid"];$type=$_COOKIE["t"];
    $stock=$_COOKIE["s"]+$_GET["txt_stock"];
    
    $q="update electronics set type='".$type."',company='".$brand."',name='".$name."',price=".$price.",details='".$details."',image='".$image."',video='".$video."',stock=".$stock." where pid='".$pid."'";
    echo '<br>';
    $result=mysql_query($q) or die("error in 17".mysql_error());
    
    
}
?>
THANK YOU FOR UPDATING