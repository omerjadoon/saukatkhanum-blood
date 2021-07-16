<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Shaukat Khanum Blood Donors Club</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<script src="vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js" ></script>
</head>
<body>

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#991111;">
                            <h4 class="modal-title" style="color:#fff">Login</h4>
                        
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
	<div class="container-fluid">
		<div class="row topbar">
			<div class="col-lg-10 topbar-contact">
				<div class="row">
					<div class="col-lg-4">
						Mail: info@saukatkhanum.com
					</div>
					<div class="col-lg-4">
						Phone: +42 123 456789 / +42 153 488789
					</div>
					<div class="col-lg-4">
						
					</div>
				</div>
			</div>
			<div class="col-lg-2 ">
				<div class="row">
					<div onClick="$('#login').modal('show')" class="col-lg-9 topbar-login" >
						<span  data-toggle="modal" data-target="#login">Sign in</span>

					</div>
					<div class="col-lg-3 topbar-contact">
						
					</div>
				</div>
			</div>
		</div>
		<!-- topbar ends -->

		<div class="row mainbar">
			<div class="col-lg-6">
				<img src="images/logo3.png" style="width: 250px;">
			</div>
			<div class="col-lg-6">
				<nav class="navbar navbar-expand-lg ">
				  
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				      <li class="nav-item active">
				        <a class="nav-link" href="#" style="color: #222;">Home <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="donor.html" style="color: #222;">Gallery</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="about.html" style="color: #222;">About us</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="career.html" style="color: #222;">Careers</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="contact.html" style="color: #222;">Contact</a>
				      </li>
				      
				    </ul>
				    
				  </div>
				</nav>
			</div>
		</div>

		<!-- end mainbar -->
		<div class="row mainpic h-100" >
			<div class="col-lg-12 h-100" style="padding: 0px;width: 100%; height: 520px;background: url('images/main.webp');" >
				<div class="row">
					<div class="col-lg-6" style="padding:50px;color: #fff;height: 520px;">
						<h1 style="margin-top: 25px;font-size: 5em;">Donate Blood and Save Lives</h1>
						<p style="margin-top: 20px; font-size: 1.2em;">Your blood can save a lot of lives. So participate in our blood donation campaign and be a part of our Shaukat Khanum Blood Donors Club family</p>

						<button class="btn btn-danger" style="margin-top: 20px; font-size: 1.2em;border-radius: 20px; padding: 20px; background: #8a0303;">Donate Now</button>
					</div>
					<div class="col-lg-6" style="padding:50px;color: #fff;">
						
					</div>
				</div>
				
			</div>
			
		</div>
	
		<div class="row mainoptions h-100">
			<div class="col-lg-1"></div>
			<div class="col-lg-3 options">
				<img src="images/i1.webp" >
				<h3 class="option-heading">Become a Volunteer</h3>
				<p>Become a Volunteer with Shaukat Khanum Blood Donors Club and participate in different blood donation activities.</p>

			</div>
			<div class="col-lg-3 options">
				<img src="images/i2.webp" >
				<h3 class="option-heading">Donate Some Blood</h3>
				<p>Donate Blood and save lives. A lot of children need your blood. Their lives depends on your donation</p>

			</div>
			<div class="col-lg-3 options">
				<img src="images/i3.webp" >
				<h3 class="option-heading">Share Our Message</h3>
				<p>Spread our message so that more and more people join this initiative.</p>

			</div>
			<div class="col-lg-1"></div>

			
		</div>

		<!-- end -->

		<div class="row" style="padding:100px">
			<div class="col-lg-12">
				<h2 style="font-size: 3em;">We at <b style="color:#8a0303">Shaukat Khanum Blood Donors Club </b>, helped alot of people and children regarding blood. After 10 years of dedications and hardwork we have achieved many goals.</h2>
				<div class="row" style="margin-top:80px; text-align: center;">
					<div class="col-lg-4">
						<img src="images/s1.webp">
						<h1>120 K</h1>
						<p>People Helped</p>
					</div>
					<div class="col-lg-4">
						<img src="images/s2.webp">
						<h1>150 K</h1>
						<p>Blood Donations</p>
					</div>
					<div class="col-lg-4">
						<img src="images/s3.webp">
						<h1>905</h1>
						<p>Volunteeres</p>
					</div>
				</div>
			</div>
		</div>


		<div class="row footer">
			<div class="col-lg-12">
				<p>Copyright 2021 - </p>
			</div>
		</div>


	</div>

	<!-- nav bar ends -->

<!-- main body start -->


</body>
</html>