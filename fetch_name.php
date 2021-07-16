<?php 

include('connection.php');


$email = $_POST['eid'];

$q = 'SELECT fname,lname,gender,pic,online from register where email="'.$email.'"'; 


	$r2=$conn->query($q);
	if($r2->num_rows>0)
	{
		$ro = $r2->fetch_assoc();

		echo '<div class="avatar-wrap ';
		if($ro['online']==1)
		{
			echo "online";
		}
		else{
			echo "";
		}
				echo '"><div class="avatar avatar--small"><img src="';
															echo $ro['pic'];

                                                            echo '" alt="">
                                                        </div>
                                                    </div>
                                                    <span class="nick">
                                                        <a href="#">'.$ro['fname'].' '.$ro['lname'].'</a>
                                                    </span>';

		
	}



 ?>