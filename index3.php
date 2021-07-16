<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shaukat Khanum Blood Donors Club</title>
	<link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="css/omer.css">
	<script src="vendor/jquery-3.2.1.min.js"></script>
	
</head>
<body>
	<!-- <header>
		<img src="images/logor.png" class="logo" alt="">
		<h1 class="top-head">Shaukat Khanum Blood Donors Club</h1>
	</header> -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Shaukat Khanum Blood Donors Club</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  	<div class="navslide"></div>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Become A Donor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#search">Search for Donor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Host A Drive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact Us</a>
      </li>
      
    </ul>
<span data-toggle="modal" data-target="#login"><button class="btn btn-danger mx-2 " >Sign In</button></span>


    
  </div>
</nav>

<!-- nav bar ends -->

<!-- main body start -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#991111;">
                            <h4 class="modal-title" style="color:#fff">Login</h4>
                        <button type="button" class="close" style="color: #fff" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            Email: <input type="text" class="form-control login-input" id="email">
                            Password:<input type="password" class="form-control login-input" id="pass">
                            <input type="checkbox" id="remember">Remember Me <br><br>
                            <button class="btn btn-danger" id="login_modal_btn">Login</button><span style="float: right;">  Don't Have Account <a href="register.php" style="color: #991111;">Register Now</a></span>
                        </div>
                        <div class="modal-footer">
                        	<span class="error_box"></span>
                        </div>
                        <script>
                        	$(document).ready(function()
                        	{
                        		function login_clicked()
                        		{
                        			$.post("login_handle.php",{
                        				email:$('#email').val(),
                        				pass:$('#pass').val(),
                        				remember:$('#remember').val()
                        			},
                        			function(data,status){
                            			
			                              if(data=='success')
			                              {
			                              	$(location).attr('href','http://localhost/blood/dashboard.php');
			                              }
			                              else if(data=='admin')
			                              {
			                              	$(location).attr('href','http://localhost/blood/admin.php');
			                              }
			                              else{
			                              	$('.error_box').html(data);
			                              }
			                          
			                         
			                          });//end of post
                        		}
                        		$('#login_modal_btn').click(function()
                        		{
                        			login_clicked();
                        			
                        		});
                        		$('.modal-dialog ').keypress(function (e) {
								 var key = e.which;
								 if(key == 13)  // the enter key code
								  {
								    login_clicked();  
								  }
								});  
                        		//end of login btn clicked
                        	});//end of ready function
                        </script>
                    </div>
                </div>
            </div>
            <!-- end modal large -->
<main>
	<div class="container-fluid">
		<div class="row banner" >
			<div class="col-md-6">
				<div class="box">
					<h2>Donate Blood, Save Life</h2>
					<p>A pint of blood can save 100 lives. So Donate Blood And Become a Blood Donation Hero by saving lives. </p>
					<a href="register.php"><button class="sign-up btn btn-lg btn-danger px-4 py-3">Sign Up</button></a>
				</div>

				
			</div>
			<div class="col-md-6">
				<!-- <div class="box1">
					<h2 style="font-size: 2.5em;">Search For Donor</h2>
					<form class="form-inline my-2 my-3">
						
							<select name="city" id="city" class="form-control mx-2 px-2">
								<option value="select">City</option>
								<option value="haripur">Haripur</option>
								<option value="haripur">Islamabad</option>
							</select>
							<select name="city" id="city" class="form-control mx-2 px-2">
								<option value="select" >Blood Group</option>
								<option value="haripur">A+</option>
								<option value="haripur">B+</option>
							</select>
						
				      
				      <button class="btn btn-lg btn-danger my-sm-0"  type="submit">Search</button>
				    </form>
				</div> -->
			</div>
		</div>

		<!-- end of banner row -->

		<div class="row">
			<div class="col-md-4">
				<div class="box1"><h3>Don't know How to get started</h3>
					<hr>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<button class="btn btn-danger">Learn More..</button></div>
			</div>
			<div class="col-md-4" id="search">
				<div class="box1"><h3>Search For Donors</h3>
					<hr>
					<br>
					<form action="">
						<select name="bldgrp" id="bloodgroup" class="form-control">
							<option disabled="true" selected="true" value="NULL">-- Select Blood Group --</option>
							<option value="A+">A+</option>
							<option value="A+">A+</option>
							<option value="A+">A+</option>
							<option value="A+">A+</option>
						</select>
						<br>
						<select name="bldgrp" id="bloodgroup" class="form-control">
							<option disabled="true" selected="true" value="NULL">-- Select City --</option>
							<option value="haripur">Haripur</option>
							<option value="Abbottabad">Abbottabad</option>
						</select>
						<br>
						<button class="btn btn-danger">Learn More..</button></div>
					</form>
					
			</div>
			<div class="col-md-4">
				<div class="box1" style="overflow: hidden;"><h3>News/Events</h3>
					<hr>
					
					<marquee behavior="slow" direction="Up" >
						<h5>Welcome To Shaukat Khanum Blood Donors Club</h5>
						<button class="btn btn-danger">View Details..</button>
						<hr>
						<br>
						<h5>Awareness seminar was conducted on blaw blaw</h5>
						<button class="btn btn-danger">View Details..</button>
						<hr>
						<br>
						<h5>Members of Shaukat Khanum Blood Donors Club doing social work</h5>
						<button class="btn btn-danger">View Details..</button>
						<br>
					</marquee>
				
					</div>

			</div>
		</div>
		<div class="row section">
			<div class="col-md-12 center"><h2>Ways You can Donate Blood</h2></div>
		</div>
		<div class="row" >
			<div class="col-md-4">
				<div class="box1"><h3>Register online and search for donors</h3><hr>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<button class="btn btn-danger">Learn More..</button>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box1"><h3>Search for donor and contact Directly</h3><hr>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<button class="btn btn-danger">Learn More..</button>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box1"><h3>Post a request on our page</h3><hr>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<button class="btn btn-danger">Learn More..</button>
				</div>
			</div>
		</div>
		
		<div class="row" style="margin-top: 50px;padding: 10px;background: #181818">
			<div class="col-md-6" style="margin-top: 50px;margin-bottom: 20px">
				<div style="text-align: center;"><img src="images/logo2.png" style="width: 200px;margin:50px auto 5px auto;" alt="">
				<h4 style="color: #fff">Shaukat Khanum Blood Donors Club</h4></div>
				<div class="row" style="padding-top: 140px;padding-left: 20px">
					<div class="col-md-3">
						<img src="images/male.png" style="width: 120px;border-radius: 50%" alt="">
					</div>
					<div class="col-md-9">
						<h6 style="color: #fff">Society Head: Mr XYZ</h6>
						<h6 style="color: #fff">Mobile: 0312-3123123</h6>
						<h6 style="color: #fff">Email: uShaukat Khanum Blood Donors Club@gmail.com</h6>
						<h6 style="color: #fff">Address: Peshawar Pakistan</h6>
					</div>
				</div>
			</div>
			<div class="col-md-6" style="margin-top: 50px;margin-bottom: 20px" id="contact">
				<h2 style="color: white;margin-bottom: 10px">Contact Us</h2>
				<form action="">
					<p style="color: white">Name: </p><input type="text" class="form-control">
					<p style="color: white">Email: </p><input type="email" class="form-control">
					<p style="color: white">Message: </p><textarea name="" id="" cols="30" rows="10" class="form-control">
						
					</textarea>
					<input type="submit" class="btn btn-primary">
				</form>
			</div>
		</div>



	</div>


</main>
<footer>
	Copyright Shaukat Khanum Blood Donors Club . All Rights Reserved
</footer>

<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
</body>
</html>