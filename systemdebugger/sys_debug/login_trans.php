<?php
ob_start();
session_start();

$username = $_POST['uname'];
$password = $_POST['pswd'];
include("connect.php");
$sql = mysql_query("select * from registration where email='$username' and password='$password'");
if(mysql_num_rows($sql) > 0){
	while($row = mysql_fetch_assoc($sql)){
		$_SESSION['id'] = $row['id'];
	}
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	if($_SESSION['value']=='true')
	{
	header("location: processor.php");	
	}
	else
	{
	header("location: welcome.php");	
		
	}
	
    
}else{
	header("location:index.php");
}


?>