<?php 

include('connection.php');

$q = 'SELECT  * FROM chat where r_email= "'.$_SESSION['email'].'" AND msg_read = 0';
$result=$conn->query($q);


echo $result->num_rows;


 ?>