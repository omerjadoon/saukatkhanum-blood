<?php 

include("test.php");
//connetion to database
include("connection2.php");
$db_email ="";
$db_pass="";




//checking for html special chars (preventing xscripting attacks)


//checking for mysql injection

$user_email = test_input($conn,$_POST['email']);

$user_pass = test_input($conn,$_POST['pass']);



	$q ='SELECT * FROM register WHERE email = "'.$user_email.'" and password ="'.$user_pass.'"';
	$result= $conn->query($q);
	if($result->num_rows >0)
	{
		if(isset($_POST['remember']))
		{
			setcookie('email',$user_email,time()+60*60*7);
		}

		session_start();
		$_SESSION['email'] = $user_email;

		$q_online = 'UPDATE register SET online = 1 where email="'.$user_email.'"';
		$conn->query($q_online);
		if($user_email=="admin")
		{
			echo "admin";
		}else{
		header("location: dashboard.php");
		}

		
	}
	else{
		echo "<p style='color:#991111'>Icorrect email or password!. Please try again.</p>";

		
	}




 ?>
