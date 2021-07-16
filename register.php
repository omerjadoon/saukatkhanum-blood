<html>
	<head>
		<title>
			Register - Shaukat Khanum Blood Donors Club
		</title>
		<link rel="stylesheet" href="style.css">
		


	</head>
	<body id="body_register">
		<div class="header_register">
			<h1>Shaukat Khanum Blood Donors Club SYSTEM REGISTRATION FORM</h1>
		</div>
		<div class="wrapper_register">
			<form  method="POST" onsubmit="return validate()" name="reg" action="register_handle.php">
				First Name: <br>
				<input type="text" name="fname" id="fname"  oninput="changed()">
				<br>
				<div id="error_fname">
					
				</div>
				Last Name:  <br>
				<input type="text" name="lname" id="lname" oninput="changed()">
				<br>
				<div id="error_lname">
					
				</div>
				Gender: <br>
				<input type="radio" name="gender" value="male" checked >Male
				<input type="radio" name="gender" value="female">Female
				<br>
				<div id="error_gender">
					
				</div>
				Blood Group: <br>
				<select name="blood_group" id="blood_group">
					<option value="A+">A+</option>
					<option value="B+">B+</option>
					<option value="A-">A-</option>
					<option value="B-">B-</option>
					<option value="AB-">AB-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
				</select>
				<br>
				<div id="error_blood_group">
					
				</div>
				Email: <br>
				<input type="email" name="email" id="email" oninput="changed()" onblur="v_mail()">
				<br>
				<div id="error_email">
					
				</div>
				Mobile: <br>
				<input type="number" name="mobile" id="mobile" oninput="changed()">
				<br>
				<div id="error_mobile">
					
				</div>
				Password: <br>
				<input type="password" name="password" id="password" oninput="changed()">
				<br>
				<div id="error_password">

				</div>
				Confirm Password: <br>
				<input type="password" name="password2" id="password2" oninput="changed()">
				<br>
				<div id="error_password2">
					
				</div>
				<input type="submit" value="Register" id="register_btn" name="reg_btn">
				<br><br>
				
				Already a member? <a href="login.php">Login here</a>
			</form>
		</div>
		

	</body>
</html>
<script type="text/javascript">
			//getting all required values
			
			var v_fname =document.getElementById('fname');
			var v_lname =document.getElementById('lname');
			//var v_gender =document.getElementById("gender");
			//var v_blood_group =document.getElementById("blood_group");
			var v_email =document.getElementById("email");
			var v_mobile =document.getElementById("mobile");
			var v_password =document.getElementById("password");
			var v_password2 =document.getElementById("password2");
			
			

			//getting error divs
			var error_fname =document.getElementById("error_fname");
			var error_lname =document.getElementById("error_lname");
			//var error_gender =document.getElementsByName("error_gender");
			//var error_blood_group =document.getElementsByName("error_blood_group");
			var error_email =document.getElementById("error_email");
			var error_mobile =document.getElementById("error_mobile");
			var error_password =document.getElementById("error_password");
			var error_password2 =document.getElementById("error_password2");

			//the validate function
			function validate()
			{
				if(v_fname.value=="")
				{
					//alert("error");
					v_fname.style.border="1px solid red";
					error_fname.innerHTML ="username is required!!!";
					error_fname.style.color="#ff0000";
					

					return false;
				}
				if(v_lname.value=="")
				{
					
					v_lname.style.border="1px solid red";
					error_lname.innerHTML ="lastname is required!!!";
					error_lname.style.color="#ff0000";
					

					return false;
				}
				if(v_email.value=="")
				{
					
					v_email.style.border="1px solid red";
					error_email.innerHTML ="email is required!!!";
					error_email.style.color="#ff0000";
					

					return false;
				}
				if(v_mobile.value=="")
				{
					
					v_mobile.style.border="1px solid red";
					error_mobile.innerHTML ="mobile number is required!!!";
					error_mobile.style.color="#ff0000";
					

					return false;
				}
				if(v_password.value=="")
				{
					
					v_password.style.border="1px solid red";
					error_password.innerHTML ="password is required!!!";
					error_password.style.color="#ff0000";
					

					return false;
				}
				if(v_password2.value=="")
				{
					
					v_password2.style.border="1px solid red";
					error_password2.innerHTML ="please enter password again!!!";
					error_password2.style.color="#ff0000";
					

					return false;
				}
				if(v_password.value!=v_password2.value)
				{
					
					v_password2.style.border="1px solid red";
					error_password2.innerHTML ="password doesn't match!";
					error_password2.style.color="#ff0000";
					

					return false;
				}
				
				
			}//end of validate function

			function changed()
			{
				if(!(v_fname.value==""))
				{
					v_fname.style.border="1px solid black";
					error_fname.innerHTML ="";
					error_fname.style.color="#ffffff";
				}
				if(!(v_lname.value==""))
				{
					v_lname.style.border="1px solid black";
					error_lname.innerHTML ="";
					error_lname.style.color="#ffffff";
				}
				if(!(v_email.value==""))
				{
					v_email.style.border="1px solid black";
					error_email.innerHTML ="";
					error_email.style.color="#ffffff";
				}
				if(!(v_mobile.value==""))
				{
					v_mobile.style.border="1px solid black";
					error_mobile.innerHTML ="";
					error_mobile.style.color="#ffffff";
				}
				if(!(v_password.value==""))
				{
					v_password.style.border="1px solid black";
					error_password.innerHTML ="";
					error_password.style.color="#ffffff";
				}
				if(!(v_password.value==v_password2))
				{
					v_password2.style.border="1px solid black";
					error_password2.innerHTML ="";
					error_password2.style.color="#ffffff";
				}
			}//end of changed function

			function v_mail()
			{
				str= document.getElementById('email').value;
				var xmlhttp = new XMLHttpRequest();
		        xmlhttp.onreadystatechange = function() {
		            if (this.readyState == 4 && this.status == 200) {
		                document.getElementById("error_email").innerHTML = this.responseText;

		            }
		        };
		        xmlhttp.open("GET", "userexist.php?q=" + str, true);
		        xmlhttp.send();
			}

			
		</script>