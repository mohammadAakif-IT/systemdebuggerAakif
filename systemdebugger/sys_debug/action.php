<?php
session_start();
$_SESSION['system']=$system=$_POST['system'];
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
<script src="js/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("tr:odd").css("background-color","#EDECFA");
  $("tr:even").css("background-color","#B9B8D1");
});
</script>
<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<body>

<div id="main_container">
	
      <div id="header">
        
      </div>
<!-- end of oferte_content-->

   <div id="main_content"> 
   
            <div id="menu_tab">
            <div class="left_menu_corner"></div>
                    <ul class="menu">
                         <li><a href="index.php" class="nav1">HOME</a></li>
                         <li class="divider"></li>
                         <li><a href="reviews.php" class="nav3">REVIEW</a></li>
                         <li class="divider"></li>
                         <li><a href="shipping.php" class="nav5">SHOPPING</a></li>
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

<!-- end of left content -->
  
   <div class="">
     <div class="long_title" style="color:#000"><font size="+1">&nbsp;&nbsp;&nbsp;&raquo;&nbsp;&nbsp;&nbsp;Which type of problem you are facing in your<?php echo"<span style='color:red;font-size:20px;'> $system </span>"; ?>??</font>
     </div>   
     <div class="long_center" style="background-image:url(images/Light2.jpg)">
     <table bordercolor="#FF0000" width="600px" border="0" class="prob_tab" style="margin:30px 200px 30px 200px">
     <tr>
       <th colspan="2">CHOOSE YOUR PROBLEM TYPE
       </th>
     </tr>
     
     <tr>
       <td>General Problems</td>
       <td align="center"><a href="prob.php?prob=General_Problems">View</a></td>
     </tr>
     
     <tr>
       <td>Power Supply Problems</td>
       <td align="center"><a href="prob.php?prob=Power_Supply_Problems">View</a></td>
     </tr>
     
     <tr>
       <td>Diskette Problems</td>
       <td class="color1" align="center"><a href="prob.php?prob=Diskette_Problems">View</a></td>
     </tr>
     
     <tr>
       <td>Hard Drive Problems</td>
       <td align="center"><a href="prob.php?prob=Hard_Drive_Problems">View</a></td>
     </tr>
     
     <tr>
       <td>MultiBay Problems</td>
       <td align="center"><a href="prob.php?prob=Multibay_Problems">View</a></td>
     </tr>
     
     <tr>
       <td>Display Problems</td>
       <td align="center"><a href="prob.php?prob=Display_Problems">View</a></td>
     </tr>
     
     <tr>
       <td>Audio Problems</td>
       <td align="center"><a href="prob.php?prob=Audio_Problems">View</a></td>
     </tr>
     
     <tr>
       <td>Printer Problems</td>
       <td align="center"><a href="prob.php?prob=Printer_Problems">View</a></td>
     </tr>
     
     <tr>
       <td>Keyboard & Mouse Problems</td>
       <td align="center"><a href="prob.php?prob=Keyboard_&_Mouse_Problems">View</a></td>
     </tr>
     
     <tr>
       <td>Hardware Installation Problems</td>
       <td align="center"><a href="prob.php?prob=Hardware_Installation_Problems">View</a></td>
     </tr>
     
     <tr>
       <td>Network Problems</td>
       <td align="center"><a href="prob.php?prob=Network_Problems">View</a></td>
     </tr>
     
     <tr>
       <td>Memory Problems</td>
       <td align="center"><a href="prob.php?prob=Memory_Problems">View</a></td>
     </tr>
     
     <tr>
       <td>Processor Problems</td>
       <td align="center"><a href="prob.php?prob=Processor_Problems">View</a></td>
     </tr>
     
     <tr>
       <td>DVD Problems</td>
       <td align="center"><a href="prob.php?prob=DVD_Problems">View</a></td>
     </tr>
    
     </tr>
     </table>
     </div>
   </div>
   
   
<!-- end of center content -->

<!-- end of right content -->   
   
</div>
<!-- end of main content -->

<?php
  include("footer.php");
?>

<!-- end of main_container -->

</body>
</html>