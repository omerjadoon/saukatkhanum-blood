<?php 
include('connection.php');
    $q_conversation = 'SELECT * FROM chat where r_email ="'.$_SESSION['email'].'" GROUP BY s_email LIMIT 1 ORDER BY date DESC ';
    $r_conv=$conn->query($q_conversation);
    if($r_conv->num_rows>0)
    {
        while ($r=$r_conv->fetch_assoc()) {
            echo 
            '
                <div class="au-message__item" id="'.$r['s_email'].'">
        <div class="au-message__item-inner">
            <div class="au-message__item-text">
                <div class="avatar-wrap">
                    <div class="avatar">
                        <img src="images/male.png" alt="">
                    </div>
                </div>
                <div class="text">
                    <h5 class="name">'.$r['s_email'].'</h5>
                    <p>'.$r['message'].'</p>
                </div>
            </div>
            <div class="au-message__item-time">
                <span>'.$r['date'].'</span>
            </div>
        </div>
    </div>
            ';
        }
    }

 ?>