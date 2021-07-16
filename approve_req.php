<?php 


include('connection.php');


$q ='UPDATE request set status=3 where id='.$_POST['id'];
$id =$_POST['id'];
if($conn->query($q))
{
	$q_grp = "SELECT * from request where id=".$id;
	$res=$conn->query($q_grp);
	$r_grp = $res->fetch_assoc();
	$q_get_email = 'SELECT email FROM register where bloodgroup="'.$r_grp['bldgroup'].'" AND email !="'.$_SESSION['email'].'"';
	//$q_get_id = 'SELECT MAX(id) FROM request';
	$result_get_email=$conn->query($q_get_email);
	//$result_get_id=$conn->query($q_get_id);
	
	// if($result_get_id->num_rows>0)
	// {
	// 	$row = $result_get_id->fetch_assoc();
	// 	$id = $row['MAX(id)'];
	// }

	if($result_get_email->num_rows>0)
	{
		
		while($n_row = $result_get_email->fetch_assoc())
		{
			$q_insert_notification ='INSERT INTO notification (email,title,email_sender,request_id) values("'.$n_row['email'].'","'.$r_grp['title'].'","'.$r_grp['email'].'","'.$id.'")';
			$conn->query($q_insert_notification);
			
		}
	}
	echo "approved";
}
else{
	echo "notapproved";
}


 ?>