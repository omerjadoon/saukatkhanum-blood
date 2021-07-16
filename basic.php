<?php 
include('connection.php');
$q ='SELECT * from register where email = "'.$_SESSION['email'].'"';
$result=$conn->query($q);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        $_SESSION['name'] = $row['fname'].' '.$row['lname'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['bloodgrp'] = $row['bloodgroup'];
        $_SESSION['pic'] = $row['pic'];
        $_SESSION['mobile'] = $row['mobile'];
    }
}


 ?>