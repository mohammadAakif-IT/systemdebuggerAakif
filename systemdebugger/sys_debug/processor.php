<?php
session_start();
unset($_SESSION['value'])

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
                         <li><a href="#" class="nav5">SHOPPING</a></li>
                         <li class="divider"></li>
                         <li><a href="welcome.php" class="nav4">PROFILE</a></li>
                         <li class="divider"></li>
                         <li><a href="contact.php" class="nav6">CONTACT US</a></li>
                         <li class="divider"></li>
                         <li><a href="logout.php" class="nav4">LOG OUT</a></li>
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
      <div class="banner_adds"> <a href="#"><img src="images/bann1.jpg" alt="" title="" border="0" /></a> </div>
    </div>
    <!-- end of left content -->
    
    <div class="center_content">
      
      <div class="center_title_bar">PROCESSOR
      <div class="processor_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table border="1px" align="center" style="background:#009541">
      <tr>
      <td>
         <div class="category_box">
         <div class="product_title">AMD Sempron Processor</div>
         <div class="product_img"><img src="images/processor/AMD Sempron processor .jpg" height="90" width="120" /></div>
         <div class="prod_price">Rs.1908&nbsp;&nbsp;&nbsp;<a href="c_buy.php?val=1">Buy Now</a></div>
         </div>
      </td>
      <td>
         <div class="category_box">
         <div class="product_title">AMD Athlon 64 X2 Processor</div>
         <div class="product_img"><img src="images/processor/AMD Athlon 64 X2 processor .jpg" height="90" width="120" /></div>
         <div class="prod_price">Rs.3392&nbsp;&nbsp;&nbsp;<a href="c_buy.php?val=2">Buy Now</a></div>
         </div>
      </td>
      <td>
         <div class="category_box">
         <div class="product_title">Intel Pentium 460 Processor</div>
         <div class="product_img"><img src="images/processor/Intel Pentium 4 600 series processor .jpg" height="90" width="120" /></div>
         <div class="prod_price">Rs.3550&nbsp;&nbsp;&nbsp;<a href="c_buy.php?val=3">Buy Now</a></div>
         </div>
      </td>
      </tr>
      <tr>
      <td>
         <div class="category_box">
         <div class="product_title">AMD Athlon 64 Processor</div>
         <div class="product_img"><img src="images/processor/AMD Athlon 64 processor .jpg" height="90" width="120" />
           <div class="prod_price">Rs.3392&nbsp;&nbsp;&nbsp;<a href="c_buy.php?val=4">Buy Now</a></div>
         </div>
      </td>
      <td>
         <div class="category_box">
         <div class="product_title">Intel Pentium Dual Processor</div>
         <div class="product_img"><img src="images/processor/Intel Pentium D dual-core processor .jpg" height="90" width="120" /></div>
         <div class="prod_price">Rs.3508&nbsp;&nbsp;&nbsp;<a href="c_buy.php?val=5">Buy Now</a></div>
         </div>
      </td>
      <td>
         <div class="category_box">
         <div class="product_title">AMD-Quad-Core-A8 Processor</div>
         <div class="product_img"><img src="images/processor/amd-quad-core-a8-6600k-apu-for-desktops-with-radeon-hd-8570d-400x400-imadhtn2hmrg43dy.jpeg"height="90" width="120" /></div>
         <div class="prod_price">Rs.6955&nbsp;&nbsp;&nbsp;<a href="c_buy.php?val=6">Buy Now</a></div>
         </div>
      </td>
      </tr>
      <tr>
      <td>
         <div class="category_box">
         <div class="product_title">AMD-Sempron-145 Processor</div>
         <div class="product_img"><img src="images/processor/amd-sempron-145-125x125-imad4ggpyrmbhh3n.jpeg" height="90" width="120" /></div>
         <div class="prod_price">Rs.1908&nbsp;&nbsp;&nbsp;<a href="c_buy.php?val=7">Buy Now</a></div>
         </div>
      </td>
      <td>
         <div class="category_box">
         <div class="product_title">Intel-Core-i5-3450 Processor</div>
         <div class="product_img"><img src="images/processor/intel-core-i5-3450-400x400-imad9aa7wyhzhz4q.jpeg" height="90" width="120" /></div>
         <div class="prod_price">Rs.12031&nbsp;&nbsp;&nbsp;<a href="c_buy.php?val=8">Buy Now</a></div>
         </div>
      </td>
      <td>
         <div class="category_box">
         <div class="product_title">Intel-i3-3220 Processor</div>
         <div class="product_img"><img src="images/processor/intel-i3-3220-400x400-imadeusr95pzxcrf.jpeg"  height="90" width="120" /></div>
         <div class="prod_price">Rs.6806&nbsp;&nbsp;&nbsp;<a href="c_buy.php?val=9">Buy Now</a></div>
         </div>
      </td>
      </tr>
      </table>
      </form>
      </div>
      
      </div>
    </div>
    <!-- end of center content -->
    
    <div class="right_content">
<div class="banner_adds"> <a href="#"><img src="images/shopping-cart1.jpg" width="195" height="120" style="border-radius:7px 7px 7px 7px" /></a> </div>
      <div class="title_box">MANUFACTURERS</div>
<?php
include("manufacture.php");
?>   
      <div class="title_box">COMPANIES</div>
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