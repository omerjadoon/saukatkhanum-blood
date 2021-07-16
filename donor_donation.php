<?php include('headfile.php'); ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Donor's Donation Requests</h2>
                                    
                                </div>
                                <hr>
                            </div>
                        </div>
                        
                            

<!--**************************************************************************************************-->
    <?php 
    
      $q ='SELECT request.id,request.email,request.date,request.title,request.bldgroup,request.body,register.fname,register.lname,register.gender FROM request,register where request.email=register.email AND request.email != "'.$_SESSION['email'].'" AND status=3 AND role=1 ORDER BY date DESC ';
      $result= $conn->query($q);
      if($result->num_rows >0)
      {

        
        while ($row =$result->fetch_assoc()){
          echo '
                <div class="row">
                    <div class="post" >
                        <div class="post-head">
                          <span class="post-img"><img src="';
                          if($row['gender']=='male')

                            {
                              echo "images/male.png";
                            }
                            else{
                              echo "images/female.png";
                            }

                          echo '" class="circle" alt="">
                          </span>
                          <span class="post-n">
                            
                            <span class="post-name"><h5>'.$row["fname"].' '.$row["lname"].'</h5></span>
                            <span class="post-date"><h6>'.$row["date"].'</h6></span>

                          </span>
                          <span style="float:right">
                                <h6>'.$row['bldgroup'].'</h6>
                          </span>

                          <hr>
                          <div class="post-t">
                            <span class="post-title"><h3 style="color:#fff;padding:8px">'.$row["title"].'</h3></span>
                          </div>
                        </div>
                        <hr>
                        
                        <div class="post-body">
                              <p>'.$row["body"].' </p>
                        </div>
                        <hr>
                        <div class="post-footer">
                          
                          <span>
                          <form action="view_post.php" method="POST"><input type="text" name="e_id" hidden value="'.$row['id'].'"><input type="submit" class="btn btn-lg btn-danger request_clicked" id="'.$row['id'].'"  value="Accept Donation"></form></span>
                        </div>
                        <hr>
                    </div>
                </div>
          


                  ';//end of echo


        }//end of while loop
        echo "<div>Found ".$result->num_rows." records</div>";
      }
      else{
        echo '<div>no record found !!!</div>';
      }
    
   ?>

 <!--***********************************************************************************************-->

                        
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © Shaukat Khanum Blood Donors Club. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->

   
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="js/main2.js"></script>
    
    <!-- Bootstrap JS-->
    
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    
    <script src="vendor/animsition/animsition.min.js"></script>

    <!-- Main JS-->
    
<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
