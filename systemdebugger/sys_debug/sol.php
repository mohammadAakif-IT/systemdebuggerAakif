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
<script src="js/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("tr:odd").css("background-color","#EDECFA");
  $("tr:even").css("background-color","#B9B8D1");
});
</script>
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
     <div class="long_title" style="color:#000"><font size="+1">&nbsp;&nbsp;&nbsp;&raquo;&nbsp;&nbsp;&nbsp;Cause and Solution!!</font>
     </div>   
     <div class="long_center" style="background-image:url(images/Light2.jpg); height:auto">
     <?php
$id=$_REQUEST['solu'];
$prob=$_SESSION['prob'];
include('connect.php');
$html='<table border="0" class="prob_tab" height="200px" width="700px" style="margin:30px 150px 30px 150px">
	         <tr>
			    <th colspan="4"  height="60px" style="font-size:22px">'.str_replace("_"," ",$prob).'</th> 
	         </tr>
			  <tr  height="60px">
				<th colspan="1">PROBLEM</th>
				<th colspan="1">CAUSE</th>
				<th colspan="1">SOLUTION</th> 
	         </tr>
			 
			 ';

$sql=mysql_query("select * from desktop where id='$id'" );
 if(mysql_num_rows($sql)>0)
	{
		while($result=mysql_fetch_array($sql))
	{
		$html.='<tr height="auto">
						<td align="justify">'.$result['problem'].'</td>
						<td align="justify">'.$result['causes'].'</td>
						<td align="justify">'.$result['solution'].'</td>
						
				</tr>';
	}
	$html.='</table>';
	}
	echo $html;
?>

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