<?php  
  include('connection.php');
    $bldgrp = $_POST['bloodgroup'];
      $q='SELECT * from register where bloodgroup = "'.$bldgrp.'"';
      $result=$conn->query($q);


      if($result->num_rows>0)
      {
        while($row=$result->fetch_assoc())
        {

             echo '<div class="col-sm-4 box"><div class="inner-box"><img src="';
                                echo $row['pic'];

              echo  '" alt="" class="circle-big"><h4 style="margin-top: 20px">'.$row['fname'].' '.$row['lname'].'</h4><br><h6>Email: '.$row['email'].'</h6><br><h6>Blood Group: '.$row['bloodgroup'].'</h6><br><h6>Age: </h6><br><h6>Mobile No: '.$row['mobile'].'</h6><h6>Blood Group: '.$row['bloodgroup'].'</h6><br></div></div>';
              
              
           
        }
      }
      else {
        echo "no result found!";
      }

  ?>