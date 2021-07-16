<?php 
if(isset($_POST['request_submit_btn']))
{

include("test.php");
include('connection.php');

//preventing sql injection attack
$user_title =test_input($conn,$_POST['title']);
$user_grp =test_input($conn,$_POST['bloodgrp']);
$user_body = test_input($conn,$_POST['body']);
$role=$_POST['role'];


if($conn->connect_error)
{
	die("connection to database fail.Please try again later");
}
else
{

	$q ='INSERT INTO request (email,title,body,bldgroup,role) values("'.$_SESSION['email'].'","'.$user_title.'","'.$user_body.'","'
	.$user_grp.'",'.$role.')';
	
	if($conn->query($q))
	{
		

		echo 'Your Request has been succesfully submitted!. ';
		header("location: dashboard.php");
		
		
	}
	else{
		echo 'unable to process your request. please try again later';
		header("location: dashboard.php");
	}

}
}// end of parent if
else{
	header("location: dashboard.php");
	}