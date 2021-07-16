<?php 
   
   include('connection.php');



    $q_n ='SELECT notification.title,notification.donate,notification.interested,notification.request_id,request.date,request.email,register.gender,register.fname,register.lname FROM notification,request,register where notification.request_id = request.id AND notification.email = "'.$_SESSION['email'].'" AND register.email = notification.email_sender ORDER BY notification.id DESC LIMIT 5';
      $n_result= $conn->query($q_n);

      if($n_result->num_rows>0)
      {
        while($row=$n_result->fetch_assoc())
        {
            echo '<form action="view_post.php" method = "POST"><input type="text" hidden name="e_id" value="'.$row['request_id'].'" ><button type="submit" style="width:100%"><div class="notifi__item" onclick="notf_clicked('.$row['request_id'].')"><div class="bg-c1 img-cir img-40"><i class="zmdi zmdi-email-open"></i></div><div class="content"><p>'.$row['title'].'</p><span class="date">'.$row['date'].'</span></div></div></button></form>';
        }
      }


 ?>