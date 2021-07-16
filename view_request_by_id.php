<?php 

include('basic.php');	
if($_SESSION['email'] == "")
{
  header("location: index.php");

}
 ?>

 <html>
 	<head>
 		<title>Admin Login | Shaukat Khanum Blood Donors Club</title>
	 	<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="Shaukat Khanum Blood Donors Club.We have helped a lot of people">
	    <meta name="author" content="Omer khan jadoon">
	    <meta name="keywords" content="Shaukat Khanum Blood Donors Club">
	    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
	    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	    <link href="css/theme.css" rel="stylesheet" media="all">
	    <script src="vendor/jquery-3.2.1.min.js"></script>
	    
	</head>
 	<body style="background:url(images/grey.png); ">
 		<div class="container" style="border:1px solid #dadada;background: #fff">
 			<div class="row">
 				<div class="col-md-12">
 					<div class="text-center">
				 		<img src="images/logo3.png" style="max-height:200px; margin: 10px;" alt="logo">
				 		<h2>Welcome To Shaukat Khanum Blood Donors Control Pannel</h2>
				 		<h2>یشوکت خانم بلڈ ڈونرز کنٹرول پینل میں خوش آمدید</h2>
				 		<hr>
				 		
			 		</div>
 				</div>
 			</div><!-- end of row -->
			<?php 
				$id=$_POST['id'];
				$q="SELECT * from request where id=".$id;
				$result=$conn->query($q);
				$row=$result->fetch_assoc();



			 ?>
 			<div class="row my-3">
 				<div class="col-md-12">
 					<div class="container p-5" style="border: 5px dotted red">
 						
 						<div class="row">
 							<div class="col-md-10"><h2 style="color: red"><?php echo $row['title']; ?></h2></div>

 							<div class="col-md-2" ><?php if($row['status']==0)
 							{
 							echo '<button onclick="approve_req('.$id.')" id="'.$id.'" class="btn btn-warning " data-toggle="tooltip" data-placement="top" title="Mark as completed">Approve Now</button>';}
 							else{
 								echo '<h3 style="color:green"><i class="fa fa-check"></i> Approved </h3>';
 							} ?></div>

 						</div>
 						<div class="row">

 							<div class="col-md-12" ><hr></div>

 						</div>
 						<div class="row my-3">
 							<div class="col-md-6"><h3> Blood Group:</h3><h4><?php echo $row['bldgroup']; ?></h4></div>
 							<div class="col-md-6"><h3>Date:</h3><h4><?php echo $row['date']; ?></h4></div>
 						</div>
 						<div class="row my-5">
 							<div class="col-md-12">
 								<h3>Description:</h3>
 								<p><?php echo $row['body']; ?>
</p>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
				 		
 			
 			<!-- footer start -->
 			<div class="row">
 				<div class="col-12">
 					<div class="footer text-center p-3" style="background:#333">
 						<h6 style="color: #fff">Copyright &copy Shaukat Khanum Blood Donors Club. All Rights Reserved</h6>
 					</div>
 				</div>
 			</div>

 		</div>
 		<script src="js/admin.js"></script>
 	</body>

 </html>
