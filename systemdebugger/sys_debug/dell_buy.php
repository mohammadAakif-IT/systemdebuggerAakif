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
        <li><a href="#" class="nav5">SHOPPING</a></li>
        <li class="divider"></li>
        <li><a href="contact.php" class="nav6">CONTACT US</a></li>
        <li class="divider"></li>
        <li><a href="#" class="nav4">SIGN UP</a></li>
      </ul>
      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
    
    <div class="left_content">
      <div class="title_box">CATEGORIES</div>
      <ul class="left_menu">
<?php
include("categories.php")
?>
      </ul>
            <div class="banner_adds"> <a href="#"><img src="images/bann2.jpg" alt="" title="" border="0" /></a> </div>
      <div class="banner_adds"> <a href="#"><img src="images/bann1.jpg" alt="" title="" border="0" /></a> </div>
    </div>
    <!-- end of left content -->
<?php  
$id=$_REQUEST['val'];
if($id=='1')
{
?>    
    <div class="center_content">
      
      <div class="center_title_bar">DELL<font style="margin-left:450px;"><a href="dell.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/dell/Dell Alienware 17 Laptop.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">Dell Alienware 17 Laptop</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>4th Gen Ci7/ 16GB/ 750GB/ Win8/ 3GB Graph</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.144990</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=144990&product=Dell Alienware 17 Laptop">
                <input type="button" value="" style="background:url(images/buy.png); height:45px; width:150px" />
                </a></td>
             </tr>
           </table> 
      </td>
      </tr>
      <tr>
      <td colspan="2">
          <table border="1" width="550px" style="font-size:18px">
            <tr><td colspan="2" align="center">Specifications</td></tr>
            <tr><td>Brand</td><td>Dell</td></tr>
            <tr><td>Color</td><td>Anodized Aluminum</td></tr>
            <tr><td>Processor</td><td>Core i7 (4th Generation)</td></tr>
            <tr><td>System Memory</td><td>16 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Windows 8</td></tr>
            <tr><td>Screen Size</td><td>17 inch</td></tr>
            <tr><td>Web Camera</td><td>2.0 Megapixel Full HD Webcam</td></tr>
            <tr><td>Dimension</td><td>413.56 x 299 x 48.46 mm</td></tr>
          </table>
      </td>
      </tr>
      </table>
      </form>
      </div>
      
      </div>
    </div>
<?php   } 
if($id=='2')
{
?>

    <div class="center_content">
      
      <div class="center_title_bar">DELL<font style="margin-left:450px;"><a href="dell.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/dell/Dell Backup Plus 1TB hdd.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">Dell Backup Plus Hard Disk</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>Connectivity: USB 3.0</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.5005</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=5005&product=Dell Backup Plus Hard Disk">
                <input type="button" value="" style="background:url(images/buy.png); height:45px; width:150px" />
                </a></td>
             </tr>
           </table> 
      </td>
      </tr>
      <tr>
      <td colspan="2">
          <table border="1" width="550px" style="font-size:18px">
            <tr><td colspan="2" align="center">Specifications</td></tr>
            <tr><td>Brand</td><td>Dell</td></tr>
            <tr><td>Color</td><td>Black</td></tr>
            <tr><td>Capacity</td><td>1 TB</td></tr>
            <tr><td>System Memory</td><td>2 GB DDR3</td></tr>
            <tr><td>Connectivity</td><td>USB 3.0</td></tr>
            <tr><td>Form Factor</td><td>Portable</td></tr>
            <tr><td>OS Supported</td><td>Windows: XP SP3 (32-bit and 64-bit), Mac OS X v10.6</td></tr>
            <tr><td>Weight</td><td>224 g</td></tr>
          </table>
      </td>
      </tr>
      </table>
      </form>
      </div>
      
      </div>
    </div> 
<?php   } 
if($id=='3')
{
?>       

    <div class="center_content">
      
      <div class="center_title_bar">DELL<font style="margin-left:450px;"><a href="dell.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/acer/Acer Gateway NE56R Laptop.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">Dell Inspiron 11 3000 Netbook</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>4th Gen CDC/ 2GB/ 500GB/ Win8/ Touch</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.32290</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=32290&product=Dell Inspiron 11 3000 Netbook">
                <input type="button" value="" style="background:url(images/buy.png); height:45px; width:150px" />
                </a></td>
             </tr>
           </table> 
      </td>
      </tr>
      <tr>
      <td colspan="2">
          <table border="1" width="550px" style="font-size:18px">
            <tr><td colspan="2" align="center">Specifications</td></tr>
            <tr><td>Brand</td><td>Dell</td></tr>
            <tr><td>Color</td><td>Silver</td></tr>
            <tr><td>Processor</td><td>Celeron Dual Core (4th Generation)</td></tr>
            <tr><td>System Memory</td><td>2 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Windows 8</td></tr>
            <tr><td>Screen Size</td><td>11.6 inch</td></tr>
            <tr><td>Web Camera</td><td>720p HD Webcam</td></tr>
            <tr><td>Dimension</td><td>300 x 201.5 x 21.2 mm</td></tr>
          </table>
      </td>
      </tr>
      </table>
      </form>
      </div>
      
      </div>
    </div>
<?php   } 
if($id=='4')
{
?>       

    <div class="center_content">
      
      <div class="center_title_bar">DELL<font style="margin-left:450px;"><a href="dell.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/dell/Dell Inspiron 15 3521 Laptop.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">Dell Inspiron 15 3521 Laptop</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>3rd Gen CDC/ 4GB/ 500GB/ Ubuntu</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.31190</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=30190&product=Dell Inspiron 15 3521 Laptop">
                <input type="button" value="" style="background:url(images/buy.png); height:45px; width:150px" />
                </a></td>
             </tr>
           </table> 
      </td>
      </tr>
      <tr>
      <td colspan="2">
          <table border="1" width="550px" style="font-size:18px">
            <tr><td colspan="2" align="center">Specifications</td></tr>
            <tr><td>Brand</td><td>Dell</td></tr>
            <tr><td>Color</td><td>Black</td></tr>
            <tr><td>Processor</td><td>Celeron Dual Core (3rd Generation)</td></tr>
            <tr><td>System Memory</td><td>4 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Ubuntu</td></tr>
            <tr><td>Screen Size</td><td>15.6 inch</td></tr>
            <tr><td>Web Camera</td><td>1.0 Megapixel</td></tr>
            <tr><td>Dimension</td><td>376 x 259 x 25.3 mm</td></tr>
          </table>
      </td>
      </tr>
      </table>
      </form>
      </div>
      
      </div>
    </div>
<?php   } 
if($id=='5')
{
?>      

    <div class="center_content">
      
      <div class="center_title_bar">ACER<font style="margin-left:450px;"><a href="dell.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/dell/Dell LED Monitor.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">Dell LED Monitor</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>Touchscreen/1 HDMI Port/21.5 inch/HD Display</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.6590</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=6590&product=Dell LED Monitor">
                <input type="button" value="" style="background:url(images/buy.png); height:45px; width:150px" />
                </a></td>
             </tr>
           </table> 
      </td>
      </tr>
      <tr>
      <td colspan="2">
          <table border="1" width="550px" style="font-size:18px">
            <tr><td colspan="2" align="center">Specifications</td></tr>
            <tr><td>1 HDMI Port</td></tr>
            <tr><td>1920 x 1080 Pixels Resolution</td></tr>
            <tr><td>1 USB Port</td></tr>
            <tr><td>3000:1 Contrast Ratio</td></tr>
            <tr><td>21.5 inch Monitor</td></tr>
            <tr><td>Full HD/HD Display</td></tr>
            <tr><td>Brightness: 250 nits</td></tr>
            <tr><td>Touchscreen Support</td></tr>
          </table>
      </td>
      </tr>
      </table>
      </form>
      </div>
      
      </div>
    </div>
<?php   } 
if($id=='6')
{
?>

    <div class="center_content">
      
      <div class="center_title_bar">DELL<font style="margin-left:450px;"><a href="dell.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/dell/Dell Vostro 2420 Laptop.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">Dell Vostro 2420 Laptop</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>2nd Gen Ci3/ 2GB/ 500GB/ Linux</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.35000</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=35000&product=Dell Vostro 2420 Laptop">
                <input type="button" value="" style="background:url(images/buy.png); height:45px; width:150px" />
                </a></td>
             </tr>
           </table> 
      </td>
      </tr>
      <tr>
      <td colspan="2">
          <table border="1" width="550px" style="font-size:18px">
            <tr><td colspan="2" align="center">Specifications</td></tr>
            <tr><td>Brand</td><td>Dell</td></tr>
            <tr><td>Color</td><td>Grey</td></tr>
            <tr><td>Processor</td><td>Core i3 (2nd Generation)</td></tr>
            <tr><td>System Memory</td><td>2 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Linux</td></tr>
            <tr><td>Screen Size</td><td>14 inch</td></tr>
            <tr><td>Web Camera</td><td>1.0 Megapixel HD Webcam</td></tr>
            <tr><td>Dimension</td><td>342 x 244 x 34.7 mm</td></tr>
          </table>
      </td>
      </tr>
      </table>
      </form>
      </div>
      
      </div>
    </div>    
    
    <?php   } 
if($id=='7')
{
?>

    <div class="center_content">
      
      <div class="center_title_bar">DELL<font style="margin-left:450px;"><a href="dell.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/dell/Dell Vostro 2520 Laptop.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">Dell Vostro 2520 Laptop</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>3rd Gen Ci3/ 4GB/ 500GB/ Ubuntu</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.31590</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=31590&product=Dell Vostro 2520 Laptop">
                <input type="button" value="" style="background:url(images/buy.png); height:45px; width:150px" />
                </a></td>
             </tr>
           </table> 
      </td>
      </tr>
      <tr>
      <td colspan="2">
          <table border="1" width="550px" style="font-size:18px">
            <tr><td colspan="2" align="center">Specifications</td></tr>
            <tr><td>Brand</td><td>Dell</td></tr>
            <tr><td>Color</td><td>Grey</td></tr>
            <tr><td>Processor</td><td>Core i3 (3rd Generation)</td></tr>
            <tr><td>System Memory</td><td>4 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Ubuntu</td></tr>
            <tr><td>Screen Size</td><td>15.6 inch</td></tr>
            <tr><td>Web Camera</td><td>1.0 Megapixel HD Webcam</td></tr>
            <tr><td>Dimension</td><td>376 x 260 x 34.5 mm</td></tr>
          </table>
      </td>
      </tr>
      </table>
      </form>
      </div>
      
      </div>
    </div>    
    
    <?php   } 
if($id=='8')
{
?>

    <div class="center_content">
      
      <div class="center_title_bar">DELL<font style="margin-left:450px;"><a href="dell.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/dell/Dell Inspiron 15 3370 Laptop.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">Dell Inspiron 15 3370 Laptop</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>3rd Gen Ci3/ 4GB/ 500GB/ Ubuntu</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.30190</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=30190&product=Dell Inspiron 15 3370 Laptop">
                <input type="button" value="" style="background:url(images/buy.png); height:45px; width:150px" />
                </a></td>
             </tr>
           </table> 
      </td>
      </tr>
      <tr>
      <td colspan="2">
          <table border="1" width="550px" style="font-size:18px">
            <tr><td colspan="2" align="center">Specifications</td></tr>
            <tr><td>Brand</td><td>Dell</td></tr>
            <tr><td>Color</td><td>Black</td></tr>
            <tr><td>Processor</td><td>Core i3 (3rd Generation)</td></tr>
            <tr><td>System Memory</td><td>4 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Ubuntu</td></tr>
            <tr><td>Screen Size</td><td>15.6 inch</td></tr>
            <tr><td>Web Camera</td><td>1.0 Megapixel HD Webcam</td></tr>
            <tr><td>Dimension</td><td>376 x 259 x 31.3 mm</td></tr>
          </table>
      </td>
      </tr>
      </table>
      </form>
      </div>
      
      </div>
    </div>    
    
    <?php   } 
if($id=='9')
{
?>

    <div class="center_content">
      
      <div class="center_title_bar">DELL<font style="margin-left:450px;"><a href="dell.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/dell/Dell Inspiron 14 3421 Laptop.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">Dell Inspiron 14 3421 Laptop</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>3rd Gen Ci5/ 4GB/ 500GB/ Win8/ 1GB Graph</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.33790</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=33790&product=Dell Inspiron 14 3421 Laptop">
                <input type="button" value="" style="background:url(images/buy.png); height:45px; width:150px" />
                </a></td>
             </tr>
           </table> 
      </td>
      </tr>
      <tr>
      <td colspan="2">
          <table border="1" width="550px" style="font-size:18px">
            <tr><td colspan="2" align="center">Specifications</td></tr>
            <tr><td>Brand</td><td>Dell</td></tr>
            <tr><td>Color</td><td>Black</td></tr>
            <tr><td>Processor</td><td>Core i5 (3rd Generation)</td></tr>
            <tr><td>System Memory</td><td>4 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Windows 8</td></tr>
            <tr><td>Screen Size</td><td>14 inch</td></tr>
            <tr><td>Web Camera</td><td>1.0 Megapixel</td></tr>
            <tr><td>Dimension</td><td>346 x 245 x 25.35 mm</td></tr>
          </table>
      </td>
      </tr>
      </table>
      </form>
      </div>
      
      </div>
    </div>    
<?php  } ?>    
    <!-- end of center content -->
    
    <div class="right_content">
<div class="banner_adds"> <a href="#"><img src="images/shopping-cart.jpg" width="190" height="130" style="border-radius:7px 7px 7px 7px" /></a> </div>      <div class="title_box">MANUFACTURERS</div>
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