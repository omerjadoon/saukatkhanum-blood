<?php 

include('connection.php');
$id=$_POST['id'];
$q = 'UPDATE request SET status=1 where id='.$id;
$conn->query($q);
 ?>