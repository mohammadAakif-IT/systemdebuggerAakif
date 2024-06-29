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
  <div class="top_bar"></div>
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
      <div class="title_box">Categories</div>
      <ul class="left_menu">
<?php
include("categories.php");
?>
      </ul>
      <div class="banner_adds"> <a href="#"><img src="images/bann2.jpg" alt="" title="" border="0" /></a> </div>
      <div class="banner_adds"> <a href="#"><img src="images/bann1.jpg" alt="" title="" border="0" /></a> </div>
    </div>
    <!-- end of left content -->
    
    <div class="center_content">
      
      <div class="center_title_bar">LOGIN
      <div class="login" align="left" margin_left="0px">
              <form name="fsignin" onsubmit="signin()"  action="login1.php" method="post">
          <table bgcolor="#DAD0D0" height="400px" width="450px" align="center">
            <tr>
              <td><h2>Username: </h2></td>
              <td align="left"><input type="text" name="uname" style="width:127px"/></td>
            </tr>
            <tr>
              <td><h2>Password: </h2></td>
              <td align="left"><input type="password" name="pswd" style="width:127px"/></td>
            </tr>
            <tr>
              <td align="center" colspan="2"><input type="submit" value="LOGIN"/></td>
            </tr>
            <tr>
              <td colspan="2"><a href="register.php">Click here to register</a></td>
            </tr>
          </table>
        </form>
      </div>
      
      </div>
    </div>
    <!-- end of center content -->
    
    <div class="right_content">

      <div class="title_box">Manufacturers</div>
<?php
include("manufacture.php");
?>   
      <div class="title_box">Companies</div>
      <div class="border_box">
        <div class="product_img">
<?php
include("marquee.php");
?>
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