<?php
ob_start();
session_start();
include("connect.php");

if(isset($_SESSION['username'])){
	$id = $_SESSION['id'];
	$sql = mysql_query("SELECT * FROM registration WHERE id='{$id}'") or die(mysql_error());

	if(mysql_num_rows($sql) > 0){
		$image = "upload/";
		while($row=mysql_fetch_array($sql)){
			$_SESSION['name']=$name  = $row['name'];
			$_SESSION['$email']=$email = $row['email'];
			$_SESSION['image']=$image = $row['image'];
		}
	
	}
}else{
	header("location:index.php");
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
                         <li><a href="reviewform.php" class="nav3">REVIEW</a></li>
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
            
   <div class="left_content">
      <div class="title_box">CATEGORIES</div>
      <ul class="left_menu">
<?php
include("categories.php");
?>
      </ul>
   <div class="banner_adds"> <a href="#"><img src="images/Anti Virus Poster.jpeg" height="250px" width="160px" style="margin-top:20px" /></a> </div>
   </div>
<!-- end of left content -->
   
   <div class="center_content">
   	<div class="center_title_bar">WELCOME</div>
      <div class="prod_box_big">
        <div class="center_prod_big">
          <form action="action.php" method="post">
          <table border="0" height="500px" width="500px" style="margin-left:25px; margin-top:20px; background-image:url(images/Light2.jpg)">
            <tr>
              <td height="150px" width="150px" colspan="2"><img src=<?php  echo "upload/".$image;  ?> height="150px" width="150px" />
              </td>
              <td colspan="6"><h1 align="center">Welcome<br /> <?php  echo $name;  ?><br /></h1>
              <h2 align="center">Email- <?php  echo $email;  ?></h2></td>
            </tr>
            <tr>
              <td colspan="6" height="60px" style="color:#F00"><h1 align="center">are you facing PROBLEM in your system!!!!</h1></td>
            </tr>
            <tr>
              <td colspan="6" height="60px"><h1 align="center">CHOOSE THE TYPE OF SYSTEM!!</h1></td>
            </tr>
            <tr height="100px">
              <td align="right" width="20px"><input type="radio" name="system" value="desktop"/></td>
              <td align="center" width="100px" bgcolor="#FFFFFF"><h2>DESKTOP</h2><hr />
                <img src="images/desktop.jpg" width="100" height="60" /></td>
              <td align="right"  width="20px"><input type="radio" name="system" value="laptop"/></td>
              <td align="center" width="100px" bgcolor="#FFFFFF"><h2>LAPTOP</h2><hr />
                <img src="images/laptop.jpg" width="100" height="60" /></td>
              <td align="right"  width="20px"><input type="radio" name="system" value="notepad"/></td>
              <td align="center" width="100px" bgcolor="#FFFFFF"><h2>NOTEPAD</h2><hr />
                <img src="images/Ultrabook.jpg" width="100" height="60" /></td>
            </tr>
            <tr>
              <td colspan="6"><input type="submit" value="NEXT"/>
              </td>
            </tr>
          </table>
          </form>
        </div>                            
      </div>
   </div>
<!-- end of center content -->
   
   <div class="right_content">
   
   <div class="banner_adds"><img src="images/IconWelcome.gif" width="30" height="30" />&nbsp;<?php  echo $name;  ?>&nbsp;<img src="images/IconWelcome.gif" width="30" height="30" /></div>
   
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