<?php 


$server ="localhost";
$user = "root";
$pass = "";
$db= "blood";



  $conn = new mysqli($server,$user,$pass,$db);

  if($conn->connect_error)
  {
        die("connection to database fail..Please try again later");
  }
 ?>