<?php 
include('test.php');
session_start();



$conn = new mysqli("localhost","root","","blood"); 
if($conn->connect_error)
{
	die("error connecting to database");
}
else{

$user_old_pass =test_input($conn,$_POST['oldpass']);
$user_new_pass =test_input($conn,$_POST['newpass']);


	$qu = 'SELECT password FROM register where email ="'.$_SESSION['email'].'"';
	$result=$conn->query($qu);
	$row=$result->fetch_assoc();
	$db_pass = $row['password'];

	if($user_old_pass != $db_pass)
	{
		echo "wrong password";

	}
	else{
		$q_insert = 'UPDATE register SET password ="'.$user_new_pass.'" where email ="'.$_SESSION['email'].'"';
		if($conn->query($q_insert))
		{
			echo "password updated successfully";
		}
		else{
			echo "Password update failed";
		}
	}



}




 ?>