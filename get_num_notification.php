<?php 

include('connection.php');

$q = 'SELECT  * FROM notification where email= "'.$_SESSION['email'].'" AND readbyme = 0';
$result=$conn->query($q);


echo $result->num_rows;

 ?>