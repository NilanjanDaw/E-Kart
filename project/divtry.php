
<!DOCTYPE html>
<html>
<head>
<title> ONLINE SHOPPING IN INDIA</title>
<meta name="keywords" content="online shopping,shopping" />
<link rel="stylesheet" type="text/css" href="style1.css" />

</head>
<body >
<script type="javascript">

    document.write("abc");
    var pwd="pwd=";
    var id="email=";
    var pwd1="";
    var id1="";
    var c=document.cookie.split(';');
    for(var i=0;i<c.length;i++){
    var ca=c[i];
    while(ca.charAt(0)==' ')
    ca=ca.substring(1);
    if(ca.indexOf(id)!=-1)
        id1=ca.substring(id.lenght,ca.length);
    if(ca.indexOf(pwd)!=-1)
        pwd1=ca.substring(pwd.lenght,ca.length);        
    if(id1.length>0 && pwd1.length>0)
    {
        
        document.getElementById("opn4").href="#";
        document.getElementById("opn4").innerHTML="Welcome";
        document.getElementById("opn5").href="divtry.php";
        document.getElementById("opn5").innerHTML="Logout";
    }
    else{
        document.getElementById("opn4").href="signup.php";
        document.getElementById("opn4").innerHTML="Signup";
        document.getElementById("opn5").href="login.php";
        document.getElementById("opn5").innerHTML="Login";
    }
}

</script>

<div id="container" style="width: 100%;">
<div style="height: 70px; width: 100%;">
<div style="height: 25px; overflow: hidden; ">
<div class="c1"><a id="opn1"  class="C3" href="divtry.php">HOME</a></div>
<div class="c1"><a id="opn2" class="C3" href="aboutus.php">ABOUT US</a></div>
<div class="c1"><a id="opn3" class="C3" href="contact.php">CONTACT US</a></div>
<div class="c1"><a id="opn4" class="C3" href="signup.php">SIGN UP</a></div>
<div class="c1"><a id="opn5" class="C3" href="login.php">LOGIN</a></div>
</div>
<form method="post"> 
<div id="search" style="width: 80%; height: 30%; float: left;">
<input type="text" name="txt_search" placeholder="Search for a product category or brand" style="width: 100%; height:40px;"/>
</div>
<div id="s_btn" style="width: 20%; height: 30%;float: left;">
<input class="change" type="submit" name="btn_search" value="SEARCH" style="height: 45px;"/>
</div>
</form>
</div>
<div>
<marquee id="mar" direction="right" heigth="10%" width="100%" truespeed="true" scrollamount="5px" behavior="alternate">
<a href="phptry.php"><img class="imagehead" src="banner1.jpg" height="240px" width="480px" /></a>
<a href="phptry.php"><img class="imagehead" src="banner2.jpg" height="240px" width="480px"/></a>
<a href="phptry.php"><img class="imagehead" src="banner3.jpg" height="240px" width="480px"/></a>
<a href="phptry.php"><img class="imagehead" src="banner4.jpg" height="240px" width="480px"/></a>
</marquee>
</div>
<div id="menu" style="height: 40%;width: 40%; ">
<nav class="ch">
<ul width="100%" height="100%">
<li class="colour">
<a class="colour" href="mobile.php">Mobile Phones</a>
<ul>
<li><a class="colour" href="phptry.php">Samsung</a></li>
<li><a class="colour" href="phptry.php">Micromax</a></li> 
<li><a class="colour" href="phptry.php">Nokia</a></li>
<li><a class="colour" href="phptry.php">Sony</a></li>
</ul>
</li>
</ul>
</nav>
<br />
<br />
</div>
<div style="float=left; margin-top=-600px;">
<a href="phptry.php"><img class="imagelist" src="samsung.jpg" height="240px" width="24%" /></a>
<a href="phptry.php"><img class="imagelist" src="sony.jpg" height="240px" width="24%"/></a>
<a href="phptry.php"><img class="imagelist" src="nokia.jpg" height="240px" width="24%"/></a>
<a href="phptry.php"><img class="imagelist" src="micromax.jpg" height="240px" width="24%"/></a>

</div>
</div>
</body>
</html>
<?php
include("footer.php");
if(isset($_POST["btn_search"]))
{
    setcookie("search","true");
    setcookie("search_query",$_POST["txt_search"]);
    header("Location:phptry.php");
}
?>