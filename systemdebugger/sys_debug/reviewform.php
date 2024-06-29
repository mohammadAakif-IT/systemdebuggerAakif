<?php

include("connect.php");
if(isset($_POST['action']) && $_POST['action']=="Review"){
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	mysql_query("insert into review values('','$a','$b','$c')");
	echo"<script>alert('Review is inserted')</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>System Debugger</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<body>
<div id="main_container">
  <div id="header"> </div>
  
<!-- end of oferte_content-->
 <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      <ul class="menu">
        <li><a href="index.php" class="nav1">HOME</a></li>
        <li class="divider"></li>
        <li><a href="reviews.php" class="nav3">REVIEWS</a></li>
        <li class="divider"></li>
        <li><a href="register.php" class="nav4">NEW REGISTRATION</a></li>
        <li class="divider"></li>
        <li><a href="acer.php" class="nav5">SHOPPING</a></li>
        <li class="divider"></li>
        <li><a href="contact.php" class="nav6">CONTACT US</a></li>
        <li class="divider"></li>
        <li><a href="register.php" class="nav4">SIGN UP</a></li>
      </ul>
      <div class="right_menu_corner"></div>
    </div>
<!-- end of menu tab -->
    
    <div class="left_content">
      <div class="title_box">CATEGORIES</div>
      <ul class="left_menu">
<?php
include("categories.php");
?>
      </ul>
      <div class="banner_adds"> <a href="#"><img src="images/bann2.jpg" alt="" title="" border="0" /></a> </div>
   <div class="banner_adds"> <a href="#"><img src="images/Anti Virus Poster.jpeg" height="250px" width="160px" /></a> </div>
    </div>
    <!-- end of left content -->
<div class="center_content">
   <div class="center_title_bar">REVIEWS</div>
      <div class="prod_box_big">
        <div class="center_prod_box_big">
      <div class="category_box" style="width:550px; height:670px">
        <div class="product_img"><h2>Enter Review</h2></div><hr />
         <div class="prod_price">
		 	<form action="" method="post">
				<table border="2" width="100%" height="400">
					<tr>
						<th>Username</th><th><input type="text" name="t1" /></th></tr>
					<tr>
						<th>Product Name</th><th><input type="text" name="t2" /></th></tr>
					<tr>
						<th>Message</th><th><textarea name="t3"></textarea></th></tr>
					<tr>
						<th colspan="2"><input type="submit" name="action" value="Review" /></th></tr>
						</table>
						</form>
         </div>
         </div>
        </div>
      </div>
    </div>
    <!-- end of center content -->
    
    <div class="right_content">
<div class="banner_adds"> <a href="#"><img src="images/review.jpg" width="160" height="130" style="border-radius:7px 7px 7px 7px" /></a> </div>
      <div class="title_box">MANUFACTURERS</div>
<?php
include("manufacture.php");
?>
      <div class="title_box">COMPANIES</div>
      <div class="border_box">
        <div class="product_img">
<marquee height="280px" direction="up" bgcolor="#FFFFFF" style="margin-bottom:5px">
          <img src="images/logo/acer_logo.jpg" width="194" height="100" />
          <img src="images/logo/apple-logo.jpg" width="194" height="114" /> 
          <img src="images/logo/Compaq_logo.png" width="194" height="100" />
          <img src="images/logo/dell-logo.jpg" width="194" height="100" />
          <img src="images/logo/hcl_logo.jpg" width="194" height="100" /> 
          <img src="images/logo/HP-Logo.jpg" width="194" height="100" /> 
          <img src="images/logo/IBM-Logo.jpg" width="194" height="100" /> 
          <img src="images/logo/lenovo-logo.jpg" width="194" height="100" /> 
          <img src="images/logo/lg_logo.jpg" width="194" height="100" /> 
          <img src="images/logo/Samsung_logo.jpg" width="194" height="100" />
          <img src="images/logo/sony_logo.jpg" width="194" height="100" />
          <img src="images/logo/toshiba_logo.jpg" width="194" height="100" />
</marquee>
        </div>
      </div>
    </div>
    <!-- end of right content --> 
    
  </div>
  <!-- end of main content -->
  
  
<?php
  include("footer.php");
?>

<!-- end of main_container -->
</body>
</html>