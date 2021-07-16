
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
</body>
</html>
<?php 
if(isset($_POST['reg_btn']))
{
include("test.php");
include("connection.php");
	
	//preventing sql injection attack
			$user_fname =test_input($conn,$_POST['fname']);
			$user_lname = test_input($conn,$_POST['lname']);
			$user_gender = test_input($conn,$_POST['gender']);
			$user_bloodgrp = test_input($conn,$_POST['blood_group']);
			$user_email = test_input($conn,$_POST['email']);
			$user_mobile = test_input($conn,$_POST['mobile']);
			$user_password = test_input($conn,$_POST['password']);
			$user_pic="";	
			if($user_gender=='male')
			{
				$user_pic="images/dp/male.png";
			}else if ($user_gender=='female')
			{
				$user_pic="images/dp/female.png";

			}

//query
			$q ='INSERT INTO register (fname,lname,gender,bloodgroup,email,mobile,password,pic) values("'.$user_fname.'","'.$user_lname.'","'.$user_gender.'","'.$user_bloodgrp.'","'.$user_email.'","'.$user_mobile.'","'.$user_password.'","'.$user_pic.'")';
			
			if($conn->query($q))
			{
				echo '<div class="thanks"><img style="text-align:center;margin:10px auto;display:block;width:150px;height:150px"src="images/thanks.png"><h2 style="text-align:center">Thanks for registration '.$user_fname.' '.$user_lname.'<br>
				Please go to <a href="login.php" style="color:red;">login page </a>to sign in.</h2></div>';
			}
			else{
				echo "unable to register. please try again later";
			}
		// }


}// end of parent if
else{
	header("location: register.php");
	}