<div>
<h1 class="c4" align="center"> PRODUCT DETAILS </h1>
</div>
<?php
$c="Samsung";$t="mobile";$n="galaxy s3";
$link=mysql_connect("localhost","root","")
or die ("error connect");
$db=mysql_select_db("project",$link) or die ("error in selection");
$q="select * from electronics where type='".$t."' and company='".$c."' and name='".$n."'";
$result=mysql_query($q) or die ("error in query fire");
$row=mysql_fetch_array($result);

echo '<div style="float: left; width: 40%;">
<img src="'.$row["image"].'" height="350px"/>
</div>
<div style="float: left; width:25%">
<h1 class="c4" align="left">'.$row["company"].' '.$row['name'].'</h1>
</div>';
echo ' <br> <br> <br><br> <div style="float: left;">
<p align="justify"> <h2 class="neonr" >PRICE:</h2> Rupees '.$row["price"].'
<br /> 
<h2 class="neonb">PRODUCT ID:</h2>'.$row["pid"].'
<br />
<h2 class="neong">DETAILS :</h2>'.$row["details"].'
<br /> </div>';
echo '<div style="float: right; width=20%;">';
echo '<h2 class="neong">Video Link:</br></h2>';
echo '<iframe width="430" height="250" src="'; 
echo "http://".$row["video"];
echo '" frameborder="0" allowfullscreen ></iframe>';
echo '</div>';
echo '</p>';
echo '<div id="s_btn" style="width: 20%; height: 30%;float: left;"> 
<input class="change" type="submit" name="btn_search" value="BUY" style="height: 25px; width:70px"/>
</div>';
?>


</div>




</div>
</body>
</html>