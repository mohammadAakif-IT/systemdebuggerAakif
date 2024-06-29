<?php
if(isset($_GET['msgd'])==3)
{
echo"<script>alert('Please LOGIN First')</script>";
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
      <?php 
   $result="";
   if(isset($_GET['msgreg']))
   {
	   $result="";
	   $result="...Congrats!!";
   }?>
      <div class="center_title_bar">SYSTEM DEBUGGER <?php echo $result;?></div>
      <div class="prod_box_big">
        <div class="center_prod_box_big">
          <div class="img"> <img src="images/logo1.jpg" width="518" height="209" /> </div>
          <div class="text"><font style="box-decoration-break:!important" size="3">
            <h3>
            <p style="display:block;background:url(images/checked.png) no-repeat left; background-position:5px 5px;padding:0 0 0 30px">
            System Debugger is introduced to develop hardware fault detection for any computer system.
            </p>
            <p style="display:block;background:url(images/checked.png) no-repeat left; background-position:5px 5px;padding:0 0 0 30px">
            Different hardware system or electronics devices usually face application fault as well as hardware fault.
            </p>
            <p style="display:block;background:url(images/checked.png) no-repeat left; background-position:5px 5px;padding:0 0 0 30px">
            This application oriented formal reasoning applies to determine the problem in computer system.
            </p>
            <p style="display:block;background:url(images/checked.png) no-repeat left; background-position:5px 5px;padding:0 0 0 30px">
            Through Debugger we can solve our problems and we can also buy laptops, destops, etc by login into it easily.</p>
            <p style="display:block;background:url(images/checked.png) no-repeat left; background-position:5px 5px;padding:0 0 0 30px">
            It proposes lot of new technological changes and inclusion to make the system more perfective and efficient data handler.
            </p>
            <p style="display:block;background:url(images/checked.png) no-repeat left; background-position:5px 5px;padding:0 0 0 30px">
            This guide provides helpful hints and solutions for troubleshooting the products as well as shopping for those hardware componets which are defected in our computer system.
            </p>
              </h3>
            </font> </div>
        </div>
      </div>
    </div>
    <!-- end of center content -->
    
    <div class="right_content">
      <div class="title_box">LOGIN</div>
      <div class="border_box">
        <form name="fsignin" onsubmit="signin()"  action="login_trans.php" method="post">
          <table bgcolor="#FFFFFF">
            <tr>
              <td>Username: </td>
              <td align="left"><input type="text" name="uname" style="width:115px"/></td>
            </tr>
            <tr>
              <td>Password: </td>
              <td align="left"><input type="password" name="pswd" style="width:115px"/></td>
            </tr>
            <tr>
              <td align="center" colspan="2"><input type="submit" value="LOGIN"/></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><a href="register.php">Click here to register</a></td>
            </tr>
          </table>
        </form>
      </div>
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