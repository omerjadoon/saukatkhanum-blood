<?php 

include('connection.php');

$q='UPDATE chat SET msg_read=1 where r_email="'.$_SESSION['email'].'"';
$conn->query($q);

 ?>