<?php 

session_start();
if(isset($_SESSION['email']))
{
		if($_SESSION['email'] != "")
		{
			header("location: dashboard.php");
		}
}

 ?>


<html>
	<head>
		<title>Login - Shaukat Khanum Blood Donors Club</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body id="body_login">
		
		<div class="header_login">
			
			<div class="header-inner"><h1>Shaukat Khanum Blood Donors Club</h1></div>
		</div>
		<div class="wrapper_login">
			<div style="text-align: center;">
				<img src="images/logo3.png" alt="" style="height:60px;padding-top: 10px">
				<h3></h3>
			</div>
			<form action="login_handle.php" method="POST" onsubmit="return validate_login()" id="login_form">
				Email: <br>
				<input type="email" name="email" id="email_login" oninput="login_changed()">
				<br>
				<div id="error_mail">

				</div>
				Password: <br>
				<input type="password" name="pass" id="pass" oninput="login_changed()">
				<br>
				<div id="error_pass">

				</div>
				<br>
				<div id="rem">
					<input type="checkbox" name="remember" value="1"> Remember me
				</div>
				<input type="submit" value="Login" id="submit_btn" name="login_btn">
				<br>

				Not a member? <a href="register.php">Register Now</a>
			</form>
			
		</div><!-- end of wrapper div -->

	</body>
<?php 
if(isset( $_COOKIE['email']))
{
	$memail = $_COOKIE['email'];
	echo "
		<script>
			document.getElementById('email_login').value = '$memail';
		</script>

	";
}


 ?>

</html>
<script>
	var email= document.getElementById("email_login");
	var password = document.getElementById("pass");
	var e_email = document.getElementById("error_mail");
	var e_password = document.getElementById("error_pass");

	function validate_login() {
		if(email.value=="")
		{
			email.style.border="1px solid red";
			e_email.innerHTML ="Please enter your email";
			e_email.style.color="#ff0000";
			return false;
		}
		if(password.value=="")
		{
			password.style.border="1px solid red";
			e_password.innerHTML ="Password can't be empty";
			e_password.style.color="#ff0000";
			return false;
		}

	}//end of validate function

	function login_changed()
	{
		if(!(email.value==""))
		{
			email.style.border="1px solid black";
			e_email.innerHTML ="";
			e_email.style.color="#ffffff";
			
		}
		if(!(password.value==""))
		{
			password.style.border="1px solid black";
			e_password.innerHTML ="";
			e_password.style.color="#ffffff";
			
		}

	}

	
</script>
