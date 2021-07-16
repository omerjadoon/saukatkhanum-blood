<?php 
include('connection.php');
$id = $_POST['mid'];
$msg = $_POST['message'];


//$q_get_r_email = 'SELECT email from request where id='.$id;

// $result = $conn->query($q_get_r_email);
// if($result->num_rows>0)
// {
// $row = $result->fetch_assoc();
$q = 'INSERT INTO chat (message,s_email,r_email) values("'.$msg.'","'.$_SESSION['email'].'","'.$id.'")';
$conn->query($q);



 ?>