<?php
include("connect.php");
$email    =  $_POST['email'];
$password =  $_POST['passw1'];
$phone    =  $_POST['phone1'];
$address  =  $_POST['addrord1'];
$name     =  $_POST['nameess1'];
$city     =  $_POST['city1'];
$gender   =  $_POST['gender'];
$img_loc=$_FILES['file']['tmp_name'];
$img_name=$_FILES['file']['name'];
$path="upload/".$img_name;
move_uploaded_file($img_loc,$path);

mysql_query("insert into registration values(0,'$name','$email','$password','$phone ','$gender','$city ','$address','$img_name')")or die(mysql_error());
header("location:index.php?msgreg=0")

?>