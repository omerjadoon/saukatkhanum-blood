<?php 
include('connection.php');

$q_offline = 'UPDATE register SET online = 0 where email="'.$_SESSION['email'].'"';
		$conn->query($q_offline);
session_destroy();
if(isset($_COOKIE['email']))
{
	//$user_email = $_COOKIE['email'];
	//setcookie('email',$user_email,time()-1);
}


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Logout</title>
 	<link rel="stylesheet" href="style.css">
 </head>
 <body>
 	<img src="images/miss.png" alt="we will miss you" id="miss_img">
 	<div id="logout_text">
 		<h3>You are Successfully Logged Out.
 		<a href="index.php" style="color: red;">Click Here</a> to go back.</h3>
 	</div>
 </body>
 </html>