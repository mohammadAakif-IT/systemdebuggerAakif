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
      <div class="center_title_bar">APPLE<font style="margin-left:420px;"><a href="apple.php">Back</a></font>
        <div class="apple_m" align="left" margin_left="0px">
          <form action="" method="post" >
            <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
              <tr>
                <td height="250px" width="250px" align="center"><img src="images/apple/Apple_ME665HN_MacBook _Pro.jpg" width="200" height="150"/></td>
                <td><table height="250" width="300" align="center">
                    <tr>
                      <td><font size="+3">Apple ME665HN/A MacBook Pro</font></td>
                    </tr>
                    <tr>
                      <td>Rating: <img src="image/stars1.jpg" width="100" height="30" /></td>
                    </tr>
                    <tr>
                      <td>3rd Gen Ci7/ 16GB/ 512GB Flash/ Mac OS X Mountain Lion/ 1GB Graph/ Retina Display</td>
                    </tr>
                    <tr>
                      <td><font size="+2">Rs.179900</font> &nbsp; &nbsp; &nbsp; 
                      <a href="shipping.php?price=179900&product=Apple ME665HN/A MacBook Pro">
                        <input type="button" value="" style="background:url(images/buy.png); height:45px; width:150px" />
                        </a></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td colspan="2"><table border="1" width="550px" style="font-size:18px">
                    <tr>
                      <td colspan="2" align="center">Specifications</td>
                    </tr>
                    <tr>
                      <td>Brand</td>
                      <td>Apple</td>
                    </tr>
                    <tr>
                      <td>Color</td>
                      <td>Silver</td>
                    </tr>
                    <tr>
                      <td>Processor</td>
                      <td>Intel-Core i7 (2nd Generation)</td>
                    </tr>
                    <tr>
                      <td>System Memory</td>
                      <td>16 GB DDR3</td>
                    </tr>
                    <tr>
                      <td>Operating System</td>
                      <td>Mac OS X Mountain Lion</td>
                    </tr>
                    <tr>
                      <td>Screen Size</td>
                      <td>15 inch</td>
                    </tr>
                    <tr>
                      <td>Web Camera</td>
                      <td>720p FaceTime HD Webcam</td>
                    </tr>
                    <tr>
                      <td>Dimension</td>
                      <td>358.9 x 247.1 x 18 mm</td>
                    </tr>
                  </table></td>
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
      <div class="center_title_bar">APPLE<font style="margin-left:420px;"><a href="apple.php">Back</a></font>
        <div class="apple_m" align="left" margin_left="0px">
          <form action="" method="post" >
            <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
              <tr>
                <td height="250px" width="250px" align="center"><img src="images/apple/Apple_ME665HN_MacBook _Pro.jpg" width="200" height="150"/></td>
                <td><table height="250" width="300" align="center">
                    <tr>
                      <td><font size="+3">Apple MD761HN/A MacBook Air</font></td>
                    </tr>
                    <tr>
                      <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
                    </tr>
                    <tr>
                      <td>4th Gen Ci5/ 4GB/ 256GB Flash/ Mac OS X Mountain Lion</td>
                    </tr>
                    <tr>
                      <td><font size="+2">Rs.170000</font> &nbsp; &nbsp; &nbsp;
                      <a href="shipping.php?price=170000&product=Apple MD761HN/A MacBook Air"><img src="images/buy.png" width="150" height="45" />
                      </a></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td colspan="2"><table border="1" width="550px" style="font-size:18px">
                    <tr>
                      <td colspan="2" align="center">Specifications</td>
                    </tr>
                    <tr>
                      <td>Brand</td>
                      <td>Apple</td>
                    </tr>
                    <tr>
                      <td>Color</td>
                      <td>Silver</td>
                    </tr>
                    <tr>
                      <td>Processor</td>
                      <td>Intel-Core i5 (4th Generation)</td>
                    </tr>
                    <tr>
                      <td>System Memory</td>
                      <td>4 GB DDR3</td>
                    </tr>
                    <tr>
                      <td>Operating System</td>
                      <td>Mac OS X Mountain Lion</td>
                    </tr>
                    <tr>
                      <td>Screen Size</td>
                      <td>13 inch</td>
                    </tr>
                    <tr>
                      <td>Web Camera</td>
                      <td>720p FaceTime HD Webcam</td>
                    </tr>
                    <tr>
                      <td>Dimension</td>
                      <td>325 x 227 x 17 mm</td>
                    </tr>
                  </table></td>
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
      <div class="center_title_bar">APPLE<font style="margin-left:420px;"><a href="apple.php">Back</a></font>
        <div class="apple_m" align="left" margin_left="0px">
          <form action="" method="post" >
            <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
              <tr>
                <td height="250px" width="250px" align="center"><img src="images/apple/Apple iMac ME086B.jpg" width="200" height="150"/></td>
                <td><table height="250" width="300" align="center">
                    <tr>
                      <td><font size="+3">Apple iMac ME086B</font></td>
                    </tr>
                    <tr>
                      <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
                    </tr>
                    <tr>
                      <td>Intel Core i5, 8GB RAM, 1TB, 21.5</td>
                    </tr>
                    <tr>
                      <td><font size="+2">Rs.50000</font> &nbsp; &nbsp; &nbsp;
                      <a href="shipping.php?price=50000&product=Apple iMac ME086B">
                      <input type="button" value="" style="background:url(images/buy.png); height:45px; width:150px" />
                      </a></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td colspan="2"><table border="1" width="550px" style="font-size:18px">
                    <tr>
                      <td colspan="2" align="center">Specifications</td>
                    </tr>
                    <tr>
                      <td>Brand</td>
                      <td>Apple</td>
                    </tr>
                    <tr>
                      <td>Color</td>
                      <td>Black</td>
                    </tr>
                    <tr>
                      <td>Processor</td>
                      <td>Intel-Core i5 (2nd Generation)</td>
                    </tr>
                    <tr>
                      <td>System Memory</td>
                      <td>8 GB DDR3</td>
                    </tr>
                    <tr>
                      <td>Operating System</td>
                      <td>Mac OS X Mountain Lion</td>
                    </tr>
                    <tr>
                      <td>Screen Size</td>
                      <td>21.5 inch</td>
                    </tr>
                    <tr>
                      <td>Web Camera</td>
                      <td>650p FaceTime HD Webcam</td>
                    </tr>
                    <tr>
                      <td>Dimension</td>
                      <td>350 x 220 x 18 mm</td>
                    </tr>
                  </table></td>
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
      <div class="center_title_bar">APPLE<font style="margin-left:420px;"><a href="apple.php">Back</a></font>
        <div class="apple_m" align="left" margin_left="0px">
          <form action="" method="post" >
            <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
              <tr>
                <td height="250px" width="250px" align="center"><img src="images/apple/Apple Mac Mini MD387B.png" width="200" height="150"/></td>
                <td><table height="250" width="300" align="center">
                    <tr>
                      <td><font size="+3">Apple Mac Mini MD387B</font></td>
                    </tr>
                    <tr>
                      <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
                    </tr>
                    <tr>
                      <td>Intel Core i5, 4GB </td>
                    </tr>
                    <tr>
                      <td><font size="+2">Rs.57500</font> &nbsp; &nbsp; &nbsp;
                      <a href="shipping.php?price=57500&product=Apple Mac Mini MD387B">
                      <input type="button" value="" style="background:url(images/buy.png); height:45px; width:150px" />
                      </a></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td colspan="2"><table border="1" width="550px" style="font-size:18px">
                    <tr>
                      <td colspan="2" align="center">Specifications</td>
                    </tr>
                    <tr>
                      <td>Brand</td>
                      <td>Apple</td>
                    </tr>
                    <tr>
                      <td>Color</td>
                      <td>white</td>
                    </tr>
                    <tr>
                      <td>Processor</td>
                      <td>Intel-Core i5(Desktop computer)</td>
                    </tr>
                    <tr>
                      <td>System Memory</td>
                      <td>4 GB</td>
                    </tr>
                    <tr>
                      <td>Operating System</td>
                      <td>Mac OS X Mountain Lion</td>
                    </tr>
                    <tr>
                      <td>Screen Size</td>
                      <td>21 inch</td>
                    </tr>
                    <tr>
                      <td>Dimension</td>
                      <td>358.9 x 247.1 x 18 mm</td>
                    </tr>
                  </table></td>
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
      <div class="center_title_bar">APPLE<font style="margin-left:420px;"><a href="apple.php">Back</a></font>
        <div class="apple_m" align="left" margin_left="0px">
          <form action="" method="post" >
            <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
              <tr>
                <td height="250px" width="250px" align="center"><img src="images/apple/Apple_MD761HN_MacBook_Air.jpg" width="200" height="150"/></td>
                <td><table height="250" width="300" align="center">
                    <tr>
                      <td><font size="+3">Apple MacBook Air, MD712B</font></td>
                    </tr>
                    <tr>
                      <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
                    </tr>
                    <tr>
                      <td>Intel Core i5, 256GB Flash, 4GB </td>
                    </tr>
                    <tr>
                      <td><font size="+2">Rs.129000</font> &nbsp; &nbsp; &nbsp;
                      <a href="shipping.php?price=129000&product=Apple MacBook Air, MD712B">
                      <input type="button" value="" style="background:url(images/buy.png); height:45px; width:150px" />
                      </a></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td colspan="2"><table border="1" width="550px" style="font-size:18px">
                    <tr>
                      <td colspan="2" align="center">Specifications</td>
                    </tr>
                    <tr>
                      <td>Brand</td>
                      <td>Apple</td>
                    </tr>
                    <tr>
                      <td>Color</td>
                      <td>Grey</td>
                    </tr>
                    <tr>
                      <td>Processor</td>
                      <td>Intel-Core i5 (2nd Generation)</td>
                    </tr>
                    <tr>
                      <td>System Memory</td>
                      <td> 256GB Flash</td>
                    </tr>
                    <tr>
                      <td>Operating System</td>
                      <td>Mac OS X Mountain Lion</td>
                    </tr>
                    <tr>
                      <td>Screen Size</td>
                      <td>17 inch</td>
                    </tr>
                    <tr>
                      <td>Web Camera</td>
                      <td>720p FaceTime HD Webcam</td>
                    </tr>
                    <tr>
                      <td>Dimension</td>
                      <td>358.9 x 247.1 x 18 mm</td>
                    </tr>
                  </table></td>
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
      <div class="center_title_bar">APPLE<font style="margin-left:420px;"><a href="apple.php">Back</a></font>
        <div class="apple_m" align="left" margin_left="0px">
          <form action="" method="post" >
            <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
              <tr>
                <td height="250px" width="250px" align="center"><img src="images/apple/Apple MacBook Pro Mac MD101HN Laptop.jpg" width="200" height="150"/></td>
                <td><table height="250" width="300" align="center">
                    <tr>
                      <td><font size="+3">Apple MacBook Pro Mac Laptop</font></td>
                    </tr>
                    <tr>
                      <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
                    </tr>
                    <tr>
                      <td>Core i5/4 GB DDR3 RAM/500 GB HDD/Mac OS</td>
                    </tr>
                    <tr>
                      <td><font size="+2">Rs.76299</font> &nbsp; &nbsp; &nbsp;
                      <a href="shipping.php?price=76299&product=Apple MacBook Pro Mac Laptop">
                      <input type="button" value="" style="background:url(images/buy.png); height:45px; width:150px" />
                      </a></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td colspan="2"><table border="1" width="550px" style="font-size:18px">
                    <tr>
                      <td colspan="2" align="center">Specifications</td>
                    </tr>
                    <tr>
                      <td>Brand</td>
                      <td>Apple</td>
                    </tr>
                    <tr>
                      <td>Color</td>
                      <td>Silver</td>
                    </tr>
                    <tr>
                      <td>Processor</td>
                      <td>Core i5 (2nd Generation)</td>
                    </tr>
                    <tr>
                      <td>System Memory</td>
                      <td>4 GB DDR3</td>
                    </tr>
                    <tr>
                      <td>Operating System</td>
                      <td>Mac OS X Lion</td>
                    </tr>
                    <tr>
                      <td>Screen Size</td>
                      <td>13 inch</td>
                    </tr>
                    <tr>
                      <td>Web Camera</td>
                      <td>720p FaceTime HD Webcam</td>
                    </tr>
                    <tr>
                      <td>Dimension</td>
                      <td>314 x 219 x 19 mm</td>
                    </tr>
                  </table></td>
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
      <div class="center_title_bar">APPLE<font style="margin-left:420px;"><a href="apple.php">Back</a></font>
        <div class="apple_m" align="left" margin_left="0px">
          <form action="" method="post" >
            <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
              <tr>
                <td height="250px" width="250px" align="center"><img src="images/apple/Apple MD712HN MacBook Air.jpg" width="200" height="150"/></td>
                <td><table height="250" width="300" align="center">
                    <tr>
                      <td><font size="+3">Apple MD712HN/A MacBook Air</font></td>
                    </tr>
                    <tr>
                      <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
                    </tr>
                    <tr>
                      <td>4th Gen Ci5/ 4GB/ 256GB Flash/ Mac OS X Mountain Lion</td>
                    </tr>
                    <tr>
                      <td><font size="+2">Rs.72000</font> &nbsp; &nbsp; &nbsp;
                      <a href="shipping.php?price=72000&product=Apple MD712HN/A MacBook Air">
                      <input type="button" value="" style="background:url(images/buy.png); height:45px; width:150px" />
                      </a></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td colspan="2"><table border="1" width="550px" style="font-size:18px">
                    <tr>
                      <td colspan="2" align="center">Specifications</td>
                    </tr>
                    <tr>
                      <td>Brand</td>
                      <td>Apple</td>
                    </tr>
                    <tr>
                      <td>Color</td>
                      <td>Silver</td>
                    </tr>
                    <tr>
                      <td>Processor</td>
                      <td>Intel-Core i5 (4th Generation)</td>
                    </tr>
                    <tr>
                      <td>System Memory</td>
                      <td>4 GB DDR3</td>
                    </tr>
                    <tr>
                      <td>Operating System</td>
                      <td>Mac OS X Mountain Lion</td>
                    </tr>
                    <tr>
                      <td>Screen Size</td>
                      <td>11 inch</td>
                    </tr>
                    <tr>
                      <td>Web Camera</td>
                      <td>720p FaceTime HD Webcam</td>
                    </tr>
                    <tr>
                      <td>Dimension</td>
                      <td>300 x 192 x 17 mm</td>
                    </tr>
                  </table></td>
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
      <div class="center_title_bar">APPLE<font style="margin-left:420px;"><a href="apple.php">Back</a></font>
        <div class="apple_m" align="left" margin_left="0px">
          <form action="" method="post" >
            <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
              <tr>
                <td height="250px" width="250px" align="center"><img src="images/apple/Apple Macbook Pro Laptop.jpg" width="200" height="150"/></td>
                <td><table height="250" width="300" align="center">
                    <tr>
                      <td><font size="+3">Apple Macbook Pro Laptop</font></td>
                    </tr>
                    <tr>
                      <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
                    </tr>
                    <tr>
                      <td>Core i5 (4th Gen)/8 GB DDR3 RAM/256 GB HDD/Mac OS X Mavericks</td>
                    </tr>
                    <tr>
                      <td><font size="+2">Rs.114900</font> &nbsp; &nbsp; &nbsp;
                      <a href="shipping.php?price=114900&product=Apple Macbook Pro Laptop">
                      <input type="button" value="" style="background:url(images/buy.png); height:45px; width:150px" />
                      </a></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td colspan="2"><table border="1" width="550px" style="font-size:18px">
                    <tr>
                      <td colspan="2" align="center">Specifications</td>
                    </tr>
                    <tr>
                      <td>Brand</td>
                      <td>Apple</td>
                    </tr>
                    <tr>
                      <td>Color</td>
                      <td>Silver</td>
                    </tr>
                    <tr>
                      <td>Processor</td>
                      <td>Intel-Core i5 (4th Generation)</td>
                    </tr>
                    <tr>
                      <td>System Memory</td>
                      <td>8 GB DDR3</td>
                    </tr>
                    <tr>
                      <td>Operating System</td>
                      <td>Mac OS X Mavericks</td>
                    </tr>
                    <tr>
                      <td>Screen Size</td>
                      <td>13.3 inch</td>
                    </tr>
                    <tr>
                      <td>Web Camera</td>
                      <td>720p FaceTime HD Webcam</td>
                    </tr>
                    <tr>
                      <td>Dimension</td>
                      <td>358.9 x 245 x 18 mm</td>
                    </tr>
                  </table></td>
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
      <div class="center_title_bar">APPLE<font style="margin-left:420px;"><a href="apple.php">Back</a></font>
        <div class="apple_m" align="left" margin_left="0px">
          <form action="" method="post" >
            <table height="650px" width="555px" border="0" bgcolor="#fff" align="center" style="border-radius:10px 10px 10px 10px">
              <tr>
                <td height="250px" width="250px" align="center"><img src="images/apple/Apple MD102HN MacBook Pro.jpg" width="200" height="150"/></td>
                <td><table height="250" width="300" align="center">
                    <tr>
                      <td><font size="+3">Apple MD102HN/A MacBook Pro</font></td>
                    </tr>
                    <tr>
                      <td>Rating: <img src="images/stars1.jpg" width="100" height="30" /></td>
                    </tr>
                    <tr>
                      <td>3rd Gen Ci7/ 8GB/ 750GB/ Mac OS X Mountain Lion</td>
                    </tr>
                    <tr>
                      <td><font size="+2">Rs.99600</font> &nbsp; &nbsp; &nbsp;
                      <a href="shipping.php?price=99600&product=Apple MD102HN/A MacBook Pro">
                      <input type="button" value="" style="background:url(images/buy.png); height:45px; width:150px" />
                      </a></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td colspan="2"><table border="1" width="550px" style="font-size:18px">
                    <tr>
                      <td colspan="2" align="center">Specifications</td>
                    </tr>
                    <tr>
                      <td>Brand</td>
                      <td>Apple</td>
                    </tr>
                    <tr>
                      <td>Color</td>
                      <td>Silver</td>
                    </tr>
                    <tr>
                      <td>Processor</td>
                      <td>Intel-Core i7 (3rd Generation)</td>
                    </tr>
                    <tr>
                      <td>System Memory</td>
                      <td>8 GB DDR3</td>
                    </tr>
                    <tr>
                      <td>Operating System</td>
                      <td>Mac OS X Mountain Lion</td>
                    </tr>
                    <tr>
                      <td>Screen Size</td>
                      <td>13 inch</td>
                    </tr>
                    <tr>
                      <td>Web Camera</td>
                      <td>720p FaceTime HD Webcam</td>
                    </tr>
                    <tr>
                      <td>Dimension</td>
                      <td>325 x 227 x 24.1 mm</td>
                    </tr>
                  </table></td>
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