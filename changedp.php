<?php 

include 'connection.php';

if(isset($_POST['upload']))
{
	$target_path = "images/dp/";
	$target_path = $target_path.basename($_FILES['fileup']['name']);
	//$target_path = trim($target_path);
	if(move_uploaded_file($_FILES['fileup']['tmp_name'], $target_path))
	{
		$q='UPDATE register SET pic = "'.$target_path.'" where email="'.$_SESSION['email'].'"';
		$conn->query($q);
		header('location:profile.php');
	}
}

 ?>