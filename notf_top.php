<?php 

include('connection.php');

$q='UPDATE notification SET readbyme=1 where email="'.$_SESSION['email'].'"';
$conn->query($q);
 ?>