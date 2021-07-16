<?php 

include('connection.php');
$id=$_POST['id'];
$q = 'UPDATE request SET status=2 where id='.$id;
$conn->query($q);

?>