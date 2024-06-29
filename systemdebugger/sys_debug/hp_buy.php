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
      
      <div class="center_title_bar">HP<font style="margin-left:450px;"><a href="HP.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/hp/HP 18-1205IN All-in-One.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">HP 18-1205IN All-in-One</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>APU Dual Core/ 4GB/ 500GB/ Win8</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.32456</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=32456&product=HP 18-1205IN All-in-One">
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
            <tr><td>Brand</td><td>HP</td></tr>
            <tr><td>Color</td><td>Black</td></tr>
            <tr><td>Processor</td><td>APU Dual Core</td></tr>
            <tr><td>System Memory</td><td>4 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Windows 8</td></tr>
            <tr><td>Screen Size</td><td>18.5 inch</td></tr>
            <tr><td>Web Camera</td><td>HP TrueVision HD Webcam megapixel</td></tr>
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
if($id=='2')
{
?>

    <div class="center_content">
      
      <div class="center_title_bar">HP<font style="margin-left:450px;"><a href="HP.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/hp/HP 250-E8D87PA Laptop.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">HP 250-E8D87PA Laptop</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>3rd Gen Ci3/ 4GB/ 500GB/ DOS</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.31250</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=31250&product=HP 250-E8D87PA Laptop">
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
            <tr><td>Brand</td><td>HP</td></tr>
            <tr><td>Color</td><td>Grey</td></tr>
            <tr><td>Processor</td><td>Core i3 (3rd Generation)</td></tr>
            <tr><td>System Memory</td><td>4 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Free DOS</td></tr>
            <tr><td>Screen Size</td><td>15.6 inch</td></tr>
            <tr><td>Web Camera</td><td>0.3 Megapixel</td></tr>
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
if($id=='3')
{
?>   
    <div class="center_content">
      
      <div class="center_title_bar">HP<font style="margin-left:450px;"><a href="HP.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/hp/HP 500 GB hdd.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">HP 500 GB Hard Disk</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>Connectivity: USB 3.0</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.3525</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=3525&product=HP 500 GB Hard Disk">
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
            <tr><td>Brand</td><td>HP</td></tr>
            <tr><td>Color</td><td>Grey</td></tr>
            <tr><td>Buffer</td><td>8 MB</td></tr>
            <tr><td>Connectivity</td><td>USB 3.0</td></tr>
            <tr><td>Operating System Support</td><td>Windows: XP, Vista, 7, 8</td></tr>
            <tr><td>Size</td><td>2.5 inch</td></tr>
            <tr><td>Software</td><td>HP SimpleSave Backup Software</td></tr>
            <tr><td>Form Factor</td><td>Portable</td></tr>
            <tr><td>Dimension</td><td>85 x 16 x 120 mm</td></tr>
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
      
      <div class="center_title_bar">HP<font style="margin-left:450px;"><a href="HP.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/hp/HP Envy 15 15 Touchsmart Laptop.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">HP Envy 15 Touchsmart Laptop</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>Core i7 (4th Gen)/8 GB DDR3 RAM/500 GB HDD/Windows 8</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.83900</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=83900&product=HP Envy 15 Touchsmart Laptop">
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
            <tr><td>Brand</td><td>HP</td></tr>
            <tr><td>Color</td><td>Silver</td></tr>
            <tr><td>Processor</td><td>Core i7 (4th Generation)</td></tr>
            <tr><td>System Memory</td><td>8 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Windows 8</td></tr>
            <tr><td>Screen Size</td><td>15.6 inch</td></tr>
            <tr><td>Web Camera</td><td>1.0 Megapixel HD Webcam</td></tr>
            <tr><td>Dimension</td><td>378 x 252 x 34.1 mm</td></tr>
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
      
      <div class="center_title_bar">HP<font style="margin-left:450px;"><a href="HP.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/hp/HP LCD Monitor.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">HP LCD Monitor</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>20 inch LED Backlit LCD/HD Display/IPS Panel Type/1000:1 Contrast Ratio</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.9245</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=9245&product=HP LCD Monitor">
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
            <tr><td>Brand</td><td>HP</td></tr>
            <tr><td>Color</td><td>Grey Silver</td></tr>
            <tr><td>Display</td><td>20 inch LED Backlit LCD Display</td></tr>
            <tr><td>Resolution</td><td>1600 x 900 pixels</td></tr>
            <tr><td>Response Time</td><td>7 ms</td></tr>
            <tr><td>Color Gamut</td><td>72 % (NTSC)</td></tr>
            <tr><td>Power Requirement</td><td>External Power Supply</td></tr>
            <tr><td>Dimension</td><td>466 x 292 x 35 mm</td></tr>
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
      
      <div class="center_title_bar">HP<font style="margin-left:450px;"><a href="HP.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/hp/HP Pavilion DV6-6155TX Laptop.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">HP Pavilion DV6-6155TX Laptop</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>2nd Gen Ci5/ 4GB/ 750GB/ Win7 HB/ 1GB Graph</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.46000</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=46000&product=HP Pavilion DV6-6155TX Laptop">
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
            <tr><td>Brand</td><td>HP</td></tr>
            <tr><td>Color</td><td>Black</td></tr>
            <tr><td>Processor</td><td>Core i5 (2nd  Generation)</td></tr>
            <tr><td>System Memory</td><td>4 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Windows 7 Home Basic</td></tr>
            <tr><td>Screen Size</td><td>15.6 inch</td></tr>
            <tr><td>Web Camera</td><td>HP TrueVision HD Webcam with Integrated Digital Microphone</td></tr>
            <tr><td>Dimension</td><td>378 x 246.8 x 35.2 mm</td></tr>
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
      
      <div class="center_title_bar">HP<font style="margin-left:450px;"><a href="HP.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/hp/HP Pavilion 15-n208TX Laptop.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">HP Pavilion 15-n208TX Laptop</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>4th Gen Ci5/ 4GB/ 1TB/ Win8.1/ 2GB Graph</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.45486</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=45486&product=HP Pavilion 15-n208TX Laptop">
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
            <tr><td>Brand</td><td>HP</td></tr>
            <tr><td>Color</td><td>Imprint Mineral Black Colour With Horizontal Brush Pattern</td></tr>
            <tr><td>Processor</td><td>Core i5 (4th Generation)</td></tr>
            <tr><td>System Memory</td><td>4 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Windows 8.1</td></tr>
            <tr><td>Screen Size</td><td>15.6 inch</td></tr>
            <tr><td>Web Camera</td><td>HP TrueVision HD Webcam</td></tr>
            <tr><td>Dimension</td><td>385.5 x 258 x 22.6 mm</td></tr>
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
      
      <div class="center_title_bar">HP<font style="margin-left:450px;"><a href="HP.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/hp/HP 15-D005TU Laptop.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">HP 15-D005TU Laptop</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>Gen Ci3/ 4GB/ 500GB/ Win8.1</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.33973</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=33973&product=HP 15-D005TU Laptop">
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
            <tr><td>Brand</td><td>HP</td></tr>
            <tr><td>Color</td><td>Imprint Sparkling Black</td></tr>
            <tr><td>Processor</td><td>Core i3 (3rd Generation)</td></tr>
            <tr><td>System Memory</td><td>4 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Windows 8.1</td></tr>
            <tr><td>Screen Size</td><td>15.6 inch</td></tr>
            <tr><td>Web Camera</td><td>HP TrueVision HD Webcam</td></tr>
            <tr><td>Dimension</td><td>377.95 x 259.08 x 28.19 mm</td></tr>
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
      
      <div class="center_title_bar">HP<font style="margin-left:450px;"><a href="HP.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/hp/HP Compaq 15-a002TU Laptop.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">HP Compaq 15-a002TU Laptop</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>Gen Ci3/ 4GB/ 500GB/ DOS</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.28300</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=28300&product=HP Compaq 15-a002TU Laptop">
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
            <tr><td>Brand</td><td>HP</td></tr>
            <tr><td>Color</td><td>Imprint Charcoal Grey</td></tr>
            <tr><td>Processor</td><td>Core i3 (3rd Generation)</td></tr>
            <tr><td>System Memory</td><td>4 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Free DOS</td></tr>
            <tr><td>Screen Size</td><td>15.6 inch</td></tr>
            <tr><td>Web Camera</td><td>HP TrueVision HD Webcam</td></tr>
            <tr><td>Dimension</td><td>377.95 x 259.08 x 28.19 mm</td></tr>
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
<div class="banner_adds"> <a href="#"><img src="images/shopping-cart.jpg" width="190" height="130" style="border-radius:7px 7px 7px 7px" /></a> </div>
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