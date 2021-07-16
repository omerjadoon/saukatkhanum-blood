<?php 

include('connection.php');

$email = $_POST['eid'];

$q = 'SELECT chat.s_email,chat.r_email,chat.date,chat.message,register.pic,register.gender from chat,register where ((s_email = "'.$_SESSION['email'].'" AND r_email ="'.$email.'" ) OR (s_email ="'.$email.'" AND r_email = "'.$_SESSION['email'].'")) AND (chat.s_email=register.email) ORDER BY date ASC'; 


	$r2=$conn->query($q);
	if($r2->num_rows>0)
	{
		while($ro = $r2->fetch_assoc())
		{
			if($ro['r_email']== $_SESSION['email'])
			{
				echo '<div class="recei-mess-wrap"><span class="mess-time">'.$ro['date'].'</span><div class="recei-mess__inner"><div class="avatar avatar--tiny"><img src="';
				echo $ro['pic'];

				echo '" alt="omer"></div><div class="recei-mess-list">
                                                            <div class="recei-mess">'.$ro['message'].'</div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>';
			}
			if($ro['s_email']== $_SESSION['email'])
			{

                   echo '<div class="send-mess-wrap">
                        <span class="mess-time">'.$ro['date'].'</span>
                        <div class="send-mess__inner">
                            <div class="send-mess-list">
                                <div class="send-mess">'.$ro['message'].'</div>
                            </div>
                        </div>
                    </div>
                    ';

			}
		}
	}
	else{
		echo "no messages";
	}





 ?>