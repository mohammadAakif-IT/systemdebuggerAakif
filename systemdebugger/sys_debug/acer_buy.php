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
      
      <div class="center_title_bar">ACER<font style="margin-left:450px;"><a href="acer.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="645px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/acer/Acer Aspire S3-391 Ultrabook.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">Acer Aspire S3-391 Ultrabook</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>3rd Gen Ci5/ 4GB/ 500GB 20GB SSD/ Win8</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.53500</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=53500&product=Acer Aspire S3-391 Ultrabook">
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
            <tr><td>Brand</td><td>Acer</td></tr>
            <tr><td>Color</td><td>Champange Gold</td></tr>
            <tr><td>Processor</td><td>Intel-Core i5 (3rd Generation)</td></tr>
            <tr><td>System Memory</td><td>4 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Windows 8</td></tr>
            <tr><td>Screen Size</td><td>13.3 inch</td></tr>
            <tr><td>Web Camera</td><td>Acer Crystal Eye HD Webcam</td></tr>
            <tr><td>Dimension</td><td>323 x 218.5 x 17.5 mm</td></tr>
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
      <div class="center_title_bar">ACER<font style="margin-left:450px;"><a href="acer.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/acer/Acer Aspire S7-392 Ultrabook.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">Acer Aspire S7-392 Ultrabook</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>4th Gen Ci5/ 4GB/ 256GB SSD/ Win8/ Touch</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.88400</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=88400&product=Acer Aspire S7-392 Ultrabook">
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
            <tr><td>Brand</td><td>Acer</td></tr>
            <tr><td>Color</td><td>Glass White</td></tr>
            <tr><td>Processor</td><td>Intel-Core i5 (4th Generation)</td></tr>
            <tr><td>System Memory</td><td>4 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Windows 8</td></tr>
            <tr><td>Screen Size</td><td>13.3 inch</td></tr>
            <tr><td>Web Camera</td><td>Acer Crystal Eye HD Webcam</td></tr>
            <tr><td>Dimension</td><td>323 x 223 x 12.9 mm</td></tr>
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
      <div class="center_title_bar">ACER<font style="margin-left:450px;"><a href="acer.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/acer/Acer Aspire V5-123 Netbook.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">Acer Aspire V5-123 Netbook</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>APU Dual Core/ 2GB/ 500GB/ Linux</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.20299</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=20299&product=Acer Aspire V5-123 Netbook">
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
            <tr><td>Brand</td><td>Acer</td></tr>
            <tr><td>Color</td><td>Black</td></tr>
            <tr><td>Processor</td><td>APU Dual Core</td></tr>
            <tr><td>System Memory</td><td>2 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Linux</td></tr>
            <tr><td>Screen Size</td><td>11.6 inch</td></tr>
            <tr><td>Web Camera</td><td>Acer Crystal Eye 720p HD Webcam</td></tr>
            <tr><td>Dimension</td><td>285 x 202 x 27.5 mm</td></tr>
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
      <div class="center_title_bar">ACER<font style="margin-left:450px;"><a href="acer.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/acer/Acer Aspire V5-131 Laptop.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">Acer Aspire V5-131 Laptop</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>3rd Gen CDC/ 2GB/ 500GB/ Linux </td>
             </tr>
             <tr>
             <td><font size="+2">Rs.20535</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=20535&product=Acer Aspire V5-131 Laptop">
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
            <tr><td>Brand</td><td>Acer</td></tr>
            <tr><td>Color</td><td>Black</td></tr>
            <tr><td>Processor</td><td>Celeron Dual Core (3rd Generation)</td></tr>
            <tr><td>System Memory</td><td>2 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Linux</td></tr>
            <tr><td>Screen Size</td><td>11.6 inch</td></tr>
            <tr><td>Web Camera</td><td>0.3 Megapixel</td></tr>
            <tr><td>Dimension</td><td>284.48 x 203.2 x 27.94 mm</td></tr>
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
      <div class="center_title_bar">ACER<font style="margin-left:450px;"><a href="acer.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/acer/Acer E1-522 Laptop.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">Acer E1-522 Laptop</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>APU Quad Core A6/ 4GB/ 500GB/ Linux</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.24250</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=24250&product=Acer E1-522 Laptop">
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
            <tr><td>Brand</td><td>Acer</td></tr>
            <tr><td>Color</td><td>Silver</td></tr>
            <tr><td>Processor</td><td>APU Quad Core A6</td></tr>
            <tr><td>System Memory</td><td>4 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Linux</td></tr>
            <tr><td>Screen Size</td><td>15.6 inch</td></tr>
            <tr><td>Web Camera</td><td>Acer Crystal Eye HD Webcam</td></tr>
            <tr><td>Dimension</td><td>382 x 256 x 25.3 mm</td></tr>
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
      <div class="center_title_bar">ACER<font style="margin-left:450px;"><a href="acer.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/acer/Acer Gateway NE56R Laptop.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">Acer Gateway NE56R Laptop</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>2nd Gen PDC/ 2GB/ 500GB/ Linux</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.25999</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=25999&product=Acer Gateway NE56R Laptop">
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
            <tr><td>Brand</td><td>Acer</td></tr>
            <tr><td>Color</td><td>Black</td></tr>
            <tr><td>Processor</td><td>Pentium Dual Core (2nd Generation)</td></tr>
            <tr><td>System Memory</td><td>2 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Linux</td></tr>
            <tr><td>Screen Size</td><td>15.6 inch</td></tr>
            <tr><td>Web Camera</td><td>1.3 Megapixel HD Webcam</td></tr>
            <tr><td>Dimension</td><td>381.6 x 253 x 33.2 mm</td></tr>
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
      <div class="center_title_bar">ACER<font style="margin-left:450px;"><a href="acer.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/acer/Acer Aspire E1-571-BT Laptop.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">Acer Aspire E1-571-BT Laptop</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>2nd Gen Ci3/ 2GB/ 500GB/ Linux</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.28490</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=28490&product=Acer Aspire E1-571-BT Laptop">
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
            <tr><td>Brand</td><td>Acer</td></tr>
            <tr><td>Color</td><td>Black</td></tr>
            <tr><td>Processor</td><td>Core i3 (2nd Generation)</td></tr>
            <tr><td>System Memory</td><td>2 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Linux</td></tr>
            <tr><td>Screen Size</td><td>15.6 inch</td></tr>
            <tr><td>Web Camera</td><td>HD Webcam</td></tr>
            <tr><td>Dimension</td><td>381.6 x 253 x 33.2 mm</td></tr>
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
      <div class="center_title_bar">ACER<font style="margin-left:450px;"><a href="acer.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/acer/Acer Aspire E1-571G Laptop.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">Acer Aspire E1-571G Laptop</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>3rd Gen Corei5/ 4GB/ 500GB/ Win8/ 2GB Graph</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.44600</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=44600&product=Acer Aspire E1-571G Laptop">
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
            <tr><td>Brand</td><td>Acer</td></tr>
            <tr><td>Color</td><td>Black</td></tr>
            <tr><td>Processor</td><td>Core i5 (3rd Generation)</td></tr>
            <tr><td>System Memory</td><td>4 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Windows 8</td></tr>
            <tr><td>Screen Size</td><td>15.6 inch</td></tr>
            <tr><td>Web Camera</td><td>HD Webcam</td></tr>
            <tr><td>Dimension</td><td>382 x 253 x 23 mm</td></tr>
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
      <div class="center_title_bar">ACER<font style="margin-left:450px;"><a href="acer.php">Back</a></font>
      <div class="apple_m" align="left" margin_left="0px">
      <form action="" method="post" >
      <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
      <tr> 
      <td height="250px" width="250px" align="center"><img src="images/acer/Acer C720 Chromebook.jpg" width="200" height="150"/></td>
      <td>
           <table height="250" width="300" align="center">
             <tr>
             <td><font size="+3">Acer C720 Chromebook</font></td>
             </tr>
             <tr>
             <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
             </tr>
             <tr>
             <td>4th Gen CDC/ 2GB/ 16GB SSD/ Chrome OS</td>
             </tr>
             <tr>
             <td><font size="+2">Rs.22999</font> &nbsp; &nbsp; &nbsp;
              <a href="shipping.php?price=22999&product=Acer C720 Chromebook">
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
            <tr><td>Brand</td><td>Acer</td></tr>
            <tr><td>Color</td><td>Smoky Grey</td></tr>
            <tr><td>Processor</td><td>Celeron Dual Core (4th Generation)</td></tr>
            <tr><td>System Memory</td><td>2 GB DDR3</td></tr>
            <tr><td>Operating System</td><td>Chrome OS</td></tr>
            <tr><td>Screen Size</td><td>11.6 inch</td></tr>
            <tr><td>Web Camera</td><td>Acer Crystal Eye HD Webcam</td></tr>
            <tr><td>Dimension</td><td>288 x 204 x 19.05 mm</td></tr>
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