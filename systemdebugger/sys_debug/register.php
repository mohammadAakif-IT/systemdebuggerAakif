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
	
	<div id="header"><!-- end of oferte_content-->
        

    </div>
    
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
            </div><!-- end of menu tab -->
            
            
    
    
   <div class="left_content">
    <div class="title_box">CATEGORIES</div>
    
        <ul class="left_menu">
<?php
include("categories.php");
?>
      </ul>
      
   <div class="banner_adds"><a href="#"><img src="images/bann2.jpg" alt="" title="" border="0" /></a></div>  
   <div class="banner_adds"> <a href="#"><img src="images/Anti Virus Poster.jpeg" height="250px" width="160px" /></a> </div> 
        
    
   </div><!-- end of left content -->
   
   
   <div class="center_content">
   	<div class="center_title_bar">NEW REGISTRATION</div>
     <div class="prod_box_big">
      <div class="center_prod_box_big" style="background-color:#008E3C">
      <form action="register_trans.php" style="height:500px; width:554px; font-size:12px" method="post" enctype="multipart/form-data" class="register">
      <h1>Registration</h1>
      <hr />
       <h2>Account Details</h2>
         <table align="center">
            <tr>
              <td>Email *</td>
              <td><input type="text" name="email"/></td>
              <td>Repeat email *</td>
              <td><input type="text" name="remail"/></td>
            </tr>
            <tr>
              <td>Password*</td>
              <td><input type="password" name="password1"/></td>
              <td>Repeat Password*</td>
              <td><input type="password" name="password2"/></td>
            </tr>
         </table>
      <hr />
        <h2>Personal Details</h2>
          <table align="center">
            <tr>
                <td>Name *</td>
                <td><input type="text" name="name1" class="long"/></td>
            </tr>
            <tr>
                <td>Phone *</td>
                <td><input type="text" name="phone1" class="long"/></td>
            </tr>
            <tr>
                <td>Address *</td>
                <td><input type="text" name="address1" class="long"/></td>
            </tr>
            <tr>
                <td>City *</td>
                <td><input type="text" name="city1" class="long"/></td>
             </tr>
             <tr>
                <td>Country *</td>
                <td><select>
                      <option>
                      </option>
                      <option value="1">India
                      </option>
                      <option value="2">United States
                      </option>
                      <option value="3">UK
                      </option>
                      <option value="4">USA
                      </option>
                      <option value="5">Canada
                      </option>
                      <option value="6">Korea
                      </option>
                      <option value="7">Pakistan
                      </option>
                    </select>
                </td>
             </tr>
             <tr>
               <td>Upload Photo</td>
               <td align="center"><input type="file" name="file" /></td>
            </tr>
          </table>
<hr />
         <h2>Further Information</h2>
                <table align="center">
                <tr>
                    <td>Gender *</td>
                    <td><input type="radio" value="male" name="gender"/>
                    <label class="gender">Male</label>
                    <input type="radio" value="female" name="gender"/>
                    <label class="gender">Female</label></td>
                </tr>
                <tr>
                    <td>Birthday *</td>
                    <td><select class="date">
                        <option value="1">01
                        </option>
                        <option value="2">02
                        </option>
                        <option value="3">03
                        </option>
                        <option value="4">04
                        </option>
                        <option value="5">05
                        </option>
                        <option value="6">06
                        </option>
                        <option value="7">07
                        </option>
                        <option value="8">08
                        </option>
                        <option value="9">09
                        </option>
                        <option value="10">10
                        </option>
                        <option value="11">11
                        </option>
                        <option value="12">12
                        </option>
                        <option value="13">13
                        </option>
                        <option value="14">14
                        </option>
                        <option value="15">15
                        </option>
                        <option value="16">16
                        </option>
                        <option value="17">17
                        </option>
                        <option value="18">18
                        </option>
                        <option value="19">19
                        </option>
                        <option value="20">20
                        </option>
                        <option value="21">21
                        </option>
                        <option value="22">22
                        </option>
                        <option value="23">23
                        </option>
                        <option value="24">24
                        </option>
                        <option value="25">25
                        </option>
                        <option value="26">26
                        </option>
                        <option value="27">27
                        </option>
                        <option value="28">28
                        </option>
                        <option value="29">29
                        </option>
                        <option value="30">30
                        </option>
                        <option value="31">31
                        </option>
                    </select>
                    <select>
                        <option value="1">January
                        </option>
                        <option value="2">February
                        </option>
                        <option value="3">March
                        </option>
                        <option value="4">April
                        </option>
                        <option value="5">May
                        </option>
                        <option value="6">June
                        </option>
                        <option value="7">July
                        </option>
                        <option value="8">August
                        </option>
                        <option value="9">September
                        </option>
                        <option value="10">October
                        </option>
                        <option value="11">November
                        </option>
                        <option value="12">December
                        </option>
                    </select>
                    <input class="year" type="text" size="4" maxlength="4"/>e.g 1976
                    </td>
               </tr>
               </table>                
<hr />
                <h2>Terms and Mailing
                </h2>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>*  I accept the <a href="#">Terms and Conditions</a></label>
                </p>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>Allow partners to send me personalized offers and related services</label>
                </p>
               <hr />
            <div><button class="button">Register &raquo;</button></div>
        </form>
            </div>
                                            
        </div>
   </div>
<!-- end of center content -->
   
   <div class="right_content">
   
<div class="banner_adds"> <a href="#"><img src="images/register_now.jpg" width="175" height="150" style="border-radius:7px 7px 7px 7px" /></a> </div>
     
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