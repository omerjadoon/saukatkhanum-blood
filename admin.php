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
	    <meta name="description" content="Shaukat Khanum Blood Donors Club is one of the active club of pakistan.We have helped a lot of people">
	    
	    <meta name="keywords" content="Shaukat Khanum Blood Donors Club">
	    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	    <link href="css/theme.css" rel="stylesheet" media="all">
	    <script src="vendor/jquery-3.2.1.min.js"></script>
	    
	</head>
 	<body style="background:url(images/grey.png); ">
 		<div class="container" style="border:1px solid #dadada;background: #fff">
 			<div class="row">
 				<div class="col-md-12">
 					<a href="logout.php" style="float: right;"><button class="btn btn-warning" style="float: right;color: #fff"><i class="fa fa-sign-out-alt"></i> Logout</button></a>
 				</div>
 			</div>
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
 			<div class="row">
 				<div class="col-md-3">
 					<div class="text-center">
				 		<div class="p-4 tr-shadow" style="background: #f41f1f;color:#fff">
				 			<h1 style="font-size: 5em;color:#fff ">
							<?php 
								$q_total_reg = "SELECT COUNT(*) from register";
								$result_reg=$conn->query($q_total_reg);
								$row= $result_reg->fetch_assoc();
								echo $row['COUNT(*)'];
							 ?></h1>
				 			<h6 style="font-size: 1.3em;color:#fff ">Registered Users</h6>
				 		</div>
			 		</div>
 				</div>
 				<div class="col-md-3">
 					<div class="text-center">
				 		<div class="p-4 tr-shadow" style="background: #ff8b03;color:#fff">
				 			<h1 style="font-size: 5em;color:#fff ">
				 				<?php 
								$q_total_req = "SELECT COUNT(*) from request";
								$result_req=$conn->query($q_total_req);
								$row= $result_req->fetch_assoc();
								echo $row['COUNT(*)'];
							 ?></h1>
				 			<h6 style="font-size: 1.3em;color:#fff ">Total Requests</h6>
				 		</div>
			 		</div>
 				</div>
 				<div class="col-md-3">
 					<div class="text-center">
				 		<div class="p-4 tr-shadow" style="background: #0cb813;color:#fff">
				 			<h1 style="font-size: 5em;color:#fff ">
				 				<?php 
								$q_total_req = "SELECT COUNT(*) from request where status = 2";
								$result_req=$conn->query($q_total_req);
								$row= $result_req->fetch_assoc();
								echo $row['COUNT(*)'];
							 ?></h1>
				 			<h6 style="font-size: 1.3em;color:#fff ">Completed Donations</h6>
				 		</div>
			 		</div>
 				</div>
 				<div class="col-md-3">
 					<div class="text-center">
				 		<div class="p-4 tr-shadow" style="background: #2189dc;color:#fff ">
				 			<h1 style="font-size: 5em;color:#fff ">
				 				<?php 
								$q_total_req = "SELECT COUNT(*) from request where status = 0 OR status = 1 OR status = 3";
								$result_req=$conn->query($q_total_req);
								$row= $result_req->fetch_assoc();
								echo $row['COUNT(*)'];
							 ?></h1>
				 			<h6 style="font-size: 1.3em;color:#fff ">Pending Donations</h6>
				 		</div>
			 		</div>
 				</div>
 				
 			</div><!-- end of row -->
 		
 			
 			<hr>
 			
 			<div class="row">
 				<div class="col-md-12">
                                <h1 class="m-3 text-center">New Requests</h1>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-borderless table-data3">
                                        <thead style="background: #232323;color: #fff" >
                                            <tr>
                                            	<th></th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>BloodGroup</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php 

								 				$q_new_req="SELECT register.fname,register.lname,register.mobile,request.title,request.id,request.date,request.bldgroup,request.status,request.role from register,request where register.email=request.email AND status=0 Order By request.date desc";
								 				$result_new=$conn->query($q_new_req);
								 				if($result_new->num_rows>0)
								 				{
								 					while($row=$result_new->fetch_assoc())
								 					{
								 						echo '
															<tr class="tr-shadow"  id="row-'.$row['id'].'">
                                                				<td><i 

                                                				class="fa 

';
if($row['role']=="0")
                                                				{
                                                					echo "fa-heart-o";
                                                				}else if($row['role']=="1") {
                                                					echo "fa-heart";
                                                				}
                                                				
                                                			


                                                				echo '




                                                				" style="color:';
                                                				
                                                				if($row['role']=="0")
                                                				{
                                                					echo "red";
                                                				}else if($row['role']=="1") {
                                                					echo "red";
                                                				}


                                                				echo ';font-size:1.2em"></i></td>
				                                                <td>'.$row['fname'].' '.$row['lname'].'</td>
				                                                <td>
				                                                    <span class="block-email">'.$row['mobile'].'</span>
				                                                </td>
				                                                <td class="desc">'.$row['title'].'</td>
				                                                <td>'.$row['date'].'</td>
				                                                <td>'.$row['bldgroup'].'</td>
				                                                <td>
				                                                    <button onclick="approve_req('.$row['id'].')" id="'.$row['id'].'" class="btn btn-warning " data-toggle="tooltip" data-placement="top" title="Mark as completed">Approve Now</button>
				                                                </td>
				                                                
				                                                <td>
												<form action="view_request_by_id.php" method="POST">
                                    	<input type="text" hidden="true" name="id" value="'.$row['id'].'">
                                    	<input type="submit" class="btn btn-primary" value="View Request">
                                    </form>
				                                                   
				                                                </td>
				                                            </tr>
				                                            <tr class="spacer"></tr>


								 						';//end of echo

								 					}
								 				}
								 			 ?>
                                            
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
 				</div>
 			</div>
 			<hr>
 			<div class="row">
 				<div class="col-md-12">
                                <h1 class="m-3 text-center">Completed Requests</h1>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-borderless table-data3">
                                        <thead style="background: #232323;color: #fff" >
                                            <tr>
                                            	<th></th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>BloodGroup</th>
                                                <th></th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php 
								 				$q_old_req="SELECT register.fname,register.lname,register.mobile,request.title,request.id,request.date,request.bldgroup,request.status,request.role from register,request where register.email=request.email AND status!=0 Order By request.date desc";
								 				$result_old=$conn->query($q_old_req);
								 				if($result_old->num_rows>0)
								 				{
								 					while($row=$result_old->fetch_assoc())
								 					{
								 						echo '
															<tr class="tr-shadow" >
                                                				<td><i class="fa ';
if($row['role']=="0")
                                                				{
                                                					echo "fa-heart-o";
                                                				}else if($row['role']=="1") {
                                                					echo "fa-heart";
                                                				}
                                                				
                                                			


                                                				echo '" style="color:';
                                                				if($row['role']=="0")
                                                				{
                                                					echo "red";
                                                				}else if($row['role']=="1") {
                                                					echo "red";
                                                				}


                                                				echo ';font-size:1.2em"></i></td>
				                                                <td>'.$row['fname'].' '.$row['lname'].'</td>
				                                                <td>
				                                                    <span class="block-email">'.$row['mobile'].'</span>
				                                                </td>
				                                                <td class="desc">'.$row['title'].'</td>
				                                                <td>'.$row['date'].'</td>
				                                                <td>'.$row['bldgroup'].'</td>
				                                                <td>
				                                                    <form action="view_request_by_id.php" method="POST">
                                    	<input type="text" hidden="true" name="id" value="'.$row['id'].'">
                                    	<input type="submit" class="btn btn-primary" value="View Request">
                                    </form>
				                                                </td>
				                                            </tr>
				                                            <tr class="spacer"></tr>


								 						';//end of echo
								 						

								 					}
								 				}
								 			 ?>
                                            
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
				 				</div>
				 			</div><!-- end of row -->
				 		
 			
 			<!-- footer start -->
 			<div class="row">
 				<div class="col-12">
 					<div class="footer text-center p-3" style="background:#333">
 						<h6 style="color: #fff">Copyright &copy 2018 - Shaukat Khanum Blood Donors Club. All Rights Reserved</h6>
 					</div>
 				</div>
 			</div>

 		</div>
 		<script src="js/admin.js"></script>
 	</body>

 </html>
