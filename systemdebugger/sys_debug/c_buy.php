<?php
session_start();
if(!isset($_SESSION['username']))
{
	$_SESSION['value']='true';
	header("location:index.php?msgd=3");
}
else
{
$price="";
$id=$_REQUEST['val'];
if($id=='1')
{
	$price="Rs.1908";
	$product="AMD Sempron Processor";	
}
if($id=='2')
{
	$price="Rs.3392";
	$product="AMD Athlon 64 X2 Processor";	
}

if($id=='3')
{
	$price="Rs.3550";
	$product="Intel Pentium 460 Processor";	
}
if($id=='4')
{
	$price="Rs.3392";
	$product="AMD Athlon 64 Processor";	
}
if($id=='5')
{
	$price="Rs.3508";
	$product="Intel Pentium Dual Processor";	
}
if($id=='6')
{
	$price="Rs.6955";
	$product="AMD-Quad-Core-A8 Processor";	
}
if($id=='7')
{
	$price="Rs.1908";
	$product="AMD-Sempron-145 Processor";	
}
if($id=='8')
{
	$price="Rs.12031";
	$product="Intel-Core-i5-3450 Processor";	
}
if($id=='9')
{
	$price="Rs.6806";
	$product="Intel-i3-3220 Processor";	
}
				if($id=='10')
				{
					$price="Rs.3610";
					$product="Intel DH61BF Motherboard";	
				}
				if($id=='11')
				{
					$price="Rs.21190";
					$product="Intel DZ87 4th Gen Motherboard";	
				}
				if($id=='12')
				{
					$price="Rs.7590";
					$product="ASUS M5A97 Motherboard";	
				}
				if($id=='13')
				{
					$price="Rs.15927";
					$product="ASUS CROSSHAIR V Formula Motherboard";	
				}
				if($id=='14')
				{
					$price="Rs.26489";
					$product="Asus Maximus VI Formula Motherboard";	
				}
				if($id=='15')
				{
					$price="Rs.11024";
					$product="M5A99FX PRO R2.0 Motherboard";	
				}
				if($id=='16')
				{
					$price="Rs.4083";
					$product="Gigabyte GA-78LMT-USB3 Motherboard";	
				}
				if($id=='17')
				{
					$price="Rs.4664";
					$product="Gigabyte E350N Motherboard";	
				}
				if($id=='18')
				{
					$price="Rs.18550";
					$product="Gigabyte GA-Z87X-OC Motherboard";	
				}
if($id=='19')
{
	$price="Rs.260";
	$product="Mini Computer Keyboard with Shrunk Keys";	
}
if($id=='20')
{
	$price="Rs.299";
	$product="Small Enough Computer Keyboard";	
}
if($id=='21')
{
	$price="Rs.279";
	$product="White Computer Keyboard BK6110";	
}
if($id=='22')
{
	$price="Rs.1049";
	$product="Dell-KM632-Keyboard";	
}
if($id=='23')
{
	$price="Rs.980";
	$product="Domo-K36-Keyboard";	
}
if($id=='24')
{
	$price="Rs.810";
	$product="Iball-Dusky-Duo-Keyboard";	
}
if($id=='25')
{
	$price="Rs.1200";
	$product="Lenovo-n5901-Keyboard";	
}
if($id=='26')
{
	$price="Rs.1719";
	$product="Logitech-K230-Keyboard";	
}
if($id=='27')
{
	$price="Rs.940";
	$product="Microsoft-CSD-Keyboard";	
}
				if($id=='28')
				{
					$price="Rs.3590";
					$product="Creative-SBS-Speakers";	
				}
				if($id=='29')
				{
					$price="Rs.799";
					$product="Dell-AX210-Speakers";	
				}
				if($id=='30')
				{
					$price="Rs.550";
					$product="Digiflip-PS001-Speakers";	
				}
				if($id=='31')
				{
					$price="Rs.899";
					$product="HP-Compact-2-Speakers";	
				}
				if($id=='32')
				{
					$price="Rs.570";
					$product="Intex-IT-880w-Speakers";	
				}
				if($id=='33')
				{
					$price="Rs.810";
					$product="Lenovo-2-0-Channel Speakers";
				}
				if($id=='34')
				{
					$price="Rs.1190";
					$product="Philips-SPA20-Speakers";	
				}
				if($id=='35')
				{
					$price="Rs.1440";
					$product="Portronics-Pure-Sound-Speakers";	
				}
				if($id=='36')
				{
					$price="Rs.1889";
					$product="Intex IT 2000 Speakers";	
				}
if($id=='37')
{
	$price="Rs.3950";
	$product="External Removable Hard Drive";	
}
if($id=='38')
{
	$price="Rs.4100";
	$product="Kingston SV300S37A/60G Internal Hard Drive";	
}
if($id=='39')
{
	$price="Rs.9999";
	$product="ADATA Premier Pro 256 GB SSD Internal Hard Drive";	
}
if($id=='40')
{
	$price="Rs.6100";
	$product="Seagate Barracuda SV-35 2 TB Desktop Internal Hard Drive";	
}
if($id=='41')
{
	$price="Rs.7175";
	$product="Corsair Force Series GS 128 GB SSD Internal Hard Drive";	
}
if($id=='42')
{
	$price="Rs.6340";
	$product="Samsung 840 EVO 120 GB Internal Hard Drive";	
}
if($id=='43')
{
	$price="Rs.4199";
	$product="WD Blue WD10EZEX 1 TB Internal Hard Drive";	
}
if($id=='44')
{
	$price="Rs.4299";
	$product="WD Caviar Green 1 TB Desktop Internal Hard Drive";	
}
if($id=='45')
{
	$price="Rs.3190";
	$product="WD Caviar Blue 500 GB Desktop Internal Hard Drive";	
}
				if($id=='46')
				{
					$price="Rs.1899";
					$product="Asus NVIDIA GeForce EN210 1 GB DDR3 Graphics Card";	
				}
				if($id=='47')
				{
					$price="Rs.3150";
					$product="Gainward NVIDIA 2GB GT610 Graphics Card";	
				}
				if($id=='48')
				{
					$price="Rs.7802";
					$product="ZOTAC NVIDIA GeForce GTX650 1GB Graphics Card";	
				}
				if($id=='49')
				{
					$price="Rs.4558";
					$product="Galaxy NVIDIA GeForce GT 630 2GB 2 GB DDR3 Graphics Card";	
				}
				if($id=='50')
				{
					$price="Rs.5650";
					$product="Sapphire AMD/ATI Radeon 1 GB DDR5 Graphics Card";	
				}
				if($id=='51')
				{
					$price="Rs.3900";
					$product="PowerColor AMD/ATI Radeon HD5570 1 GB Graphics Card";	
				}
				if($id=='52')
				{
					$price="Rs.3200";
					$product="Forsa NVIDIA GT610 2 GB DDR3 Graphics Card";	
				}
				if($id=='53')
				{
					$price="Rs.21000";
					$product="MSI NVIDIA N760 TF 2GD5/OC 2 GB GDDR5 Graphics Card";	
				}
				if($id=='54')
				{
					$price="Rs.2890";
					$product="PowerColor AMD/ATI Radeon HD5450 2 GB Graphics Card";	
				}
if($id=='55')
{
	$price="Rs.1775";
	$product="ADATA-AD3U1333C2G9";	
}
if($id=='56')
{
	$price="Rs.10300";
	$product="AVERMEDIA-AVER-3D";	
}
if($id=='57')
{
	$price="Rs.8750";
	$product="AVERMEDIA-AVER-TV";	
}
if($id=='58')
{
	$price="Rs.1990";
	$product="TRANSCEND-jm1600ksn";	
}
if($id=='59')
{
	$price="Rs.1420";
	$product="TRANSCEND-jm800qlu-1g";	
}
if($id=='60')
{
	$price="Rs.2010";
	$product="TRANSCEND-jm667qlu-2g";	
}
if($id=='61')
{
	$price="Rs.6200";
	$product="CORSAIR-cmso2gx3m1a1333c9";	
}
if($id=='62')
{
	$price="Rs.16800";
	$product="AVERMEDIA-Darkcrystal";	
}
if($id=='63')
{
	$price="Rs.2890";
	$product="CORSAIR-cmz8gx3m1a1600c10";	
}
				if($id=='64')
				{
					$price="Rs.4368";
					$product="Benq-G615HDPl-400x400";	
				}
				if($id=='65')
				{
					$price="Rs.7749";
					$product="Benq-GW2255-400x400";	
				}
				if($id=='66')
				{
					$price="Rs.7690";
					$product="Dell-E1913S-400x400";	
				}
				if($id=='67')
				{
					$price="Rs.6590";
					$product="Dell-E2014H-400x400";	
				}
				if($id=='68')
				{
					$price="Rs.9499";
					$product="Dell-S2240l-400x400";	
				}
				if($id=='69')
				{
					$price="Rs.8500";
					$product="Dell-S2240T-400x400";	
				}
				if($id=='70')
				{
					$price="Rs.4999";
					$product="Zebronics-Cinema-4-3";	
				}
				if($id=='71')
				{
					$price="Rs.17299";
					$product="Viewsonic-TD2220";	
				}
				if($id=='72')
				{
					$price="Rs.10490";
					$product="Viewsonic-VX2270SMH-LED";	
				}
if($id=='73')
{
	$price="Rs.1979";
	$product="Apple MacBook Cooling Fan";	
}
if($id=='74')
{
	$price="Rs.948";
	$product="Graphic Laptop Cooling Fan";	
}
if($id=='75')
{
	$price="Rs.1082";
	$product="HP G6 Series Laptop Cooling Fan";	
}
if($id=='76')
{
	$price="Rs.1250";
	$product="HP Pavilion Laptop Cooling Fan";	
}
if($id=='77')
{
	$price="Rs.777";
	$product="HP Probook Laptop Cooling Fan";	
}
if($id=='78')
{
	$price="Rs.1299";
	$product="Cooler-Master-Megaflow";	
}
if($id=='79')
{
	$price="Rs.1219";
	$product="Cooler-Master-R4-LUS";	
}
if($id=='80')
{
	$price="Rs.420";
	$product="Deepcool-Wind-Blade-80";	
}
if($id=='81')
{
	$price="Rs.390";
	$product="Deepcool-Xfan80l-Y";	
}
				if($id=='82')
				{
					$price="Rs.199";
					$product="Ambrane-M-111 Mouse";	
				}
				if($id=='83')
				{
					$price="Rs.269";
					$product="Dell-HRG26 Mouse";	
				}
				if($id=='84')
				{
					$price="Rs.110";
					$product="Quantum-QHM-220 Mouse";	
				}
				
				if($id=='85')
				{
					$price="Rs.450";
					$product="Digiflip-WM005 Mouse";	
				}
				if($id=='86')
				{
					$price="Rs.353";
					$product="HP-KY619AA Mouse";	
				}
				if($id=='87')
				{
					$price="Rs.325";
					$product="HP-X1000 Mouse";	
				}
				if($id=='88')
				{
					$price="Rs.770";
					$product="Lenovo-N50 Mouse";	
				}
				if($id=='89')
				{
					$price="Rs.765";
					$product="Logitech-M185 Mouse";	
				}
				if($id=='90')
				{
					$price="Rs.449";
					$product="Microsoft-Mouse-200";	
				}
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
             
             
    <table border="0" height="670px" width="555px" bgcolor="#FFFFFF" align="center">
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
    <td colspan="2"><label><font style="font-size:15px;font-weight:bolder;"><?php echo "".$product; ?></font></label></td>
    </tr>
    <tr>
      <td><font style="font-size:15px;font-weight:bolder;">PRODUCT PRICE</font></td>
      <td colspan="2"><label><font style="font-size:15px;font-weight:bolder;"><?php echo "".$price;  ?></font></label></td>
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
      <td colspan="2"><font style="font-size:15px;font-weight:bolder;"><?php echo "".$price;  ?></font></td>
    </tr>
    <tr>
      <td align="left" height="200px"><font style="font-size:12px;font-weight:bolder; margin-left:20px">Terms & Conditions:<br />
      1.All disputes will be settled at ropar jurisdiction only.<br /> <br />
      2.Freight charges extra as applicable.<br /> <br />
      3.Goods sold are under manufacturer's warranty.</font><br /> <br />
      </td>
      <td colspan="2" align="right"><img src="images/sign.jpg" height="60px" width="120px"/><br />Authority Sign &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
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