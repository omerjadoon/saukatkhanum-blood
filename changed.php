<?php 

include 'connection.php';

if(isset($_POST['upload']))
{
	$target_path = "images/dp/";
	$target_path = $target_path.basename($_FILES['fileuploaded']['name']);
	if(move_uploaded_file($_FILES['fileuploaded']['tmp_name'], $target_path))
	{
		$q='UPDATE register SET pic = "'.$target_path.'" where email="'.$_SESSION['email'];
		$conn->query($q);
	}
}

 ?>