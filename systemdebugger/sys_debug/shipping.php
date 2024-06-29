<?php
session_start();

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
<script>
function myFunction()
{
window.print();
}
</script>
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
                         <li><a href="reviews.php" class="nav3">REVIEW</a></li>
                         <li class="divider"></li>
                         <li><a href="#" class="nav5">SHIPPING</a></li>
                         <li class="divider"></li>
                         <li><a href="welcome.php" class="nav4">PROFILE</a></li>
                         <li class="divider"></li>
                         <li><a href="contact.php" class="nav6">CONTACT US</a></li>
                         <li class="divider"></li>
                         <li><a href="logout.php" class="nav4">LOG OUT</a></li>
                    </ul>

             <div class="right_menu_corner"></div>
            </div><!-- end of menu tab -->
            
            
    
    
   <div class="left_content">
    <div class="title_box">CATEGORIES</div>
      <ul class="left_menu">
<?php
include("categories.php")
?>
      </ul>
      <div class="banner_adds">
          
        <a href="#"><img src="images/bann2.jpg" alt="" title="" border="0" /></a>
      </div>  
      <div class="banner_adds">
     
     <a href="#"><img src="images/bann1.jpg" alt="" title="" border="0" /></a>
     </div>  
        
    
   </div><!-- end of left content -->
   
   
   <div class="center_content">
   	<div class="center_title_bar">SHOPPING</div>
   <?php
   $id=$_SESSION['id'];
   include("connect.php");
     $sql=mysql_query("select * from registration where id='$id'");
	 if(mysql_num_rows($sql)>0)
   {
	   ?>
    
    
    	<div class="prod_box_big">
        	
            <div class="center_prod_box_big" style="border:3px solid GREEN;">
             <form action="" method="post">
             
             
    <table border="0" height="670px" width="555px" bgcolor="#FFFFFF">
    <tr>
    <td align="left"><img src="images/shoppingcart.png" /><button onclick="myFunction()">Print</button></td>
    <td height="60px" align="left" width="300px"><strong><h1>*SHOPPING BILL*</h1></strong></td>
    <td><img src="images/shoppingcart.png" /></td>
    </tr>
    <tr>
    <?php
	
	   while($result=mysql_fetch_array($sql))
	   {  
   ?>
    <td><font style="font-size:15px;font-weight:bolder;">PRODUCT NAME</font></td>
    <td colspan="2"><label><font style="font-size:15px;font-weight:bolder;"><?php echo $_REQUEST['product']; ?></font></label></td>
    </tr>
    <tr>
      <td><font style="font-size:15px;font-weight:bolder;">PRODUCT PRICE</font></td>
      <td colspan="2"><label><font style="font-size:15px;font-weight:bolder;">Rs.<?php echo $_REQUEST['price'];
      $_SESSION['price']=$_REQUEST['price']
      ?></font></label></td>
    <tr>
      <td><font style="font-size:15px;font-weight:bolder;">NAME</font></td>
      <td colspan="2"><label><font style="font-size:15px;font-weight:bolder;"><?php echo $result['name'];    ?></font></label></td>
    </tr>
    <tr>
      <td><font style="font-size:15px;font-weight:bolder;">ADDRESS</font></td>
      <td colspan="2"><label><font style="font-size:15px;font-weight:bolder;"><?php echo $result['address'];    ?></font></label></td>
    </tr>
     <tr>
      <td><font style="font-size:15px;font-weight:bolder;">CITY</font></td>
      <td colspan="2"><label><font style="font-size:15px;font-weight:bolder;"><?php echo $result['city'];    ?></font></label></td>
    </tr>
     <tr>
      <td><font style="font-size:15px;font-weight:bolder;">PHONE NO.</font></td>
      <td colspan="2"><label><font style="font-size:15px;font-weight:bolder;"><?php echo $result['phone'];    ?></font></label></td>
    </tr>
    <tr>
      <td><font style="font-size:15px;font-weight:bolder;">EMAIL</font></td>
      <td colspan="2"><label><font style="font-size:15px;font-weight:bolder;"><?php echo $result['email'];    ?></font></label></td>
    </tr>
    <tr>
      <td><font style="font-size:15px;font-weight:bolder;">TOTAL AMOUNT</font></td>
      <td colspan="2"><font style="font-size:15px;font-weight:bolder;">Rs.<?php echo $_REQUEST['price'];
      $_SESSION['price']=$_REQUEST['price']
      ?></font></td>
    </tr>
    <tr>
      <td align="left" height="200px"><font style="font-size:12px;font-weight:bolder;">Terms & Conditions:<br />
      1.All disputes will be settled at ropar jurisdiction only.<br /> <br />
      2.Freight charges extra as applicable.<br /> <br />
      3.Goods sold are under manufacturer's warranty.</font><br /> <br />
      </td>
      <td colspan="2" align="right"><img src="images/sign.jpg" height="60px" width="120px"/><br />Authority Sign</td>
    </tr>
    </table>
    <?php  }
   }
	?>
    </form>
            </div>
                                            
        </div>
   </div><!-- end of center content -->
   
   <div class="right_content">
     <div class="title_box">THANK YOU</div>  
     <div class="border_box">
         <div class="product_title"></div>
         <div class="product_img"><img src="images/thank_you_bag.jpg" height="100" width="140" /></div>
         <div class="prod_price">Visit Again!!!</div>
     </div>  
     
     
     
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