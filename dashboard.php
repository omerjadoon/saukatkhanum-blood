<?php 
include('basic.php');
if($_SESSION['email'] == "")
{
  header("location: index.php");

}


 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Shaukat Khanum Blood Donors Club is one of the active club of pakistan.We have helped a lot of people">
    
    <meta name="keywords" content="Shaukat Khanum Blood Donors Club">

    <!-- Title Page-->
    <title>Shaukat Khanum Blood Donors Club</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
   
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
<!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <script>
        function mark_completed(x)
            {
                $.post("mark_completed.php",
                  {
                      id:x
                  },
                  function(data,status){
                    var a = '.'+x;
                    var b = '.txt'+x;
                       
                     $(a).removeClass('btn-warning');
                    $(a).toggleClass('btn-success');
                    $(a).val("Completed");
                    $(a).attr('disabled','disabled');
                    $(b).css('color','green');
                   
                      
                      
                  });

               
            }

        function notf_clicked(id)
              {
               
                $.post("view_post.php",
                  {
                      e_id:id
                  },
                  function(data,status){
                   
                      
                      
                  });
              }
    </script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo"  href="index.html">
                            <img src="images/icon/logo.png"  alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Home</a>
                        </li>
                        
                        <li>
                            <a href="search.php">
                                <i class="fas fa-table"></i>Search For Donors</a>
                        </li>
                        <li>
                            <a href="view_request.php">
                                <i class="far fa-check-square"></i>View Requests</a>
                        </li>
                        <li>
                            <a href="donor_donation.php">
                                <i class="fas fa-check-square"></i>Donor Donations</a>
                        </li>
                        <li>
                            <a href="setting.php">
                                <i class="fas fa-calendar-alt"></i>Settings</a>
                        </li>
                        <li>
                            <a href="help.php">
                                <i class="fas fa-map-marker-alt"></i>Help</a>
                        </li>
                        <li>
                            <a href="logout.php">
                                <i class="fas fa-map-marker-alt"></i>Logout</a>
                        </li>
                        
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block" >
            <div class="logo" >
                <a href="#">
                    <img src="images/logo3.png" style="width:200px" alt="logo" />
                </a>
                <hr>
            </div>
            <div class="menu-sidebar__content js-scrollbar1" style="background-color: #262f3d">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-home"></i>Home</a>
                        </li>
                        
                        <li>
                            <a href="search.php">
                                <i class="fas fa-search"></i>Search For Donors</a>
                        </li>
                        <li>
                            <a href="view_request.php">
                                <i class="fas fa-file"></i>View Requests</a>
                        </li>
                        <li>
                            <a href="donor_donation.php">
                                <i class="fas fa-heartbeat"></i>Donor Donations</a>
                        </li>
                        <li>
                            <a href="setting.php">
                                <i class="zmdi zmdi-settings"></i>Settings</a>
                        </li>
                        <li>
                            <a href="help.php">
                                <i class="fas fa-question"></i>Help</a>
                        </li>
                        <li>
                            <a href="logout.php">
                                <i class="zmdi zmdi-power"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop" style="background-color: #262f3d">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                           <!-- <form class="form-header" action="" method="POST">
                                <input class="au-input au-input- -xl" type="text" name="search" placeholder="Search for donors &amp; Requests..." />
                                <button class="au-btn- -submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form> -->
                            <form action="#"><h3 style="color: #ddd">Shaukat Khanum Blood Donors Club</h3></form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu msg-top">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity" id="msg-quantity"></span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p class="msg-quantity-txt"></p>
                                            </div>
                                            <?php 

                                                $q_conversation = 'SELECT chat.s_email,chat.message,chat.date,register.gender,register.pic,register.online,register.fname,register.lname FROM chat,register where r_email ="'.$_SESSION['email'].'" AND chat.s_email=register.email GROUP BY s_email ORDER BY date DESC LIMIT 3';
                                              //SELECT * FROM( select s_email,r_email, max(msgid) as mxid from chat group by s_email) as x INNER JOIN chat as f on f.s_email= x.s_email and f.msgid = x.mxid and f.r_email=x.r_email
                                               
                                                $r_conv=$conn->query($q_conversation);
                                                if($r_conv->num_rows>0)
                                                {
                                                    while ($r=$r_conv->fetch_assoc()) {
                                                        echo 
                                                        '
                                                          <div class="mess__item">
                                                            <div class="image img-cir img-40">
                                                                <img src="';
                                                                echo $r['pic'];
                                                            echo '"  alt="" />
                                                            </div>
                                                            <div class="content">
                                                                <h6>'.$r['fname'].' '.$r['lname'].'</h6>
                                                                <p>'.$r['message'].'</p>
                                                                <span class="time">'.$r['date'].'</span>
                                                            </div>
                                                        </div>
                                                        ';
                                                    }
                                                }

                                             ?>
                                            
                                           
                                            <div class="mess__footer">
                                                <a href="all_messages.php">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="noti__item js-item-menu notf-top">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity" id="notf-quantity"></span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p class="notf-quantity-txt"></p>
                                            </div>
                                            <div class="notf_content">
                                            <!-- here we will display content of notifications -->
                                            
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="all_notifications.php">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="

                                            <?php 
                                                echo $_SESSION['pic'];

                                             ?>
                                            " style="border-radius: 50%" alt="Omer" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['name']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="profile.php">
                                                        <img src="

                                                        <?php 
                                                            echo $_SESSION['pic'];
                                                         ?>
                                                        " style="border-radius: 50%" alt="" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="profile.php"><?php echo $_SESSION['name']; ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION['email']; ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="profile.php">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="setting.php">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Shaukat Khanum Blood Donors Club</h2>
                                    
                                </div>
                                <hr>
                            </div>

                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1" data-toggle="modal" data-target="#requestModal">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix" >
                                            <div class="icon">
                                               <i class="far fas fa-heartbeat"></i>
                                            </div>
                                            
                                            <div class="text p-2" >
                                                <h2>Ask For Blood‪‪‪‪‪‭‪‭‪‭‪</h2>
                                                <span></span>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>



                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2" data-toggle="modal" data-target="#donorModal">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                
                                                 <i class="fa fa-tint"></i>
                                                

                                            </div>
                                            <div class="text p-2">
                                                <h2>Donate Blood</h2>
                                                <span></span>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="view_request.php">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>View Requests</h2>
                                                <span></span>
                                                <div style="height:1px">.  </div>
                                                
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="donor_donation.php">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fa fa-heart"></i>
                                                
                                            </div>
                                            <div class="text">
                                                <h2>Donor's   Donations</h2>

                                                <span></span>
                                                <div style="height:1px">.  </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--black"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>My Requests</h3>
                                        
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <p>Requests created by <?php echo $_SESSION['name']; ?></p>
                                        </div>
                                        <div class="au-task-list js-scrollbar3 ">
                                            <?php 

                                                $q_my_requests='SELECT * from request where email="'.$_SESSION['email'].'" ORDER BY date DESC';;
                                                $res = $conn->query($q_my_requests);
                                                if($res->num_rows>0)
                                                {   
                                                    while($rw = $res->fetch_assoc())
                                                    {
                                                    
                                                    echo '<div class="notifi__item" ><div class="content"><h4  style="color:';
                                                        if($rw['status']==0)
                                                        {
                                                            echo "#dd0000";
                                                        }else if($rw['status']==1)
                                                        {
                                                            echo "orange";
                                                        }else if($rw['status']==2)
                                                        {
                                                            echo "green";
                                                        }
                                                        else if($rw['status']==3)
                                                        {
                                                            echo "#007bff";
                                                        }
                                                        

                                                    echo '"  class="txt'.$rw['id'].'">'.$rw['title'].'</h4><span class="date">'.$rw['date'].'</span></div><div><input type="button" 
                                                    onclick=mark_completed('.$rw['id'].') class="btn '.$rw['id'].' ';
                                                        if($rw['status']==0)
                                                        {
                                                            echo "btn-danger";
                                                        }else if($rw['status']==1)
                                                        {
                                                            echo "btn-warning";
                                                        }else if($rw['status']==2)
                                                        {
                                                            echo "btn-success";
                                                        }
                                                        else if($rw['status']==3)
                                                        {
                                                            echo "btn-primary";
                                                        }

                                                    echo '" style="float:right;display:inline-block"';
                                                    if($rw['status']==0 || $rw['status']==2 || $rw['status']==3 )
                                                        {
                                                            echo " disabled";
                                                        }
                                                    echo ' value="';

                                                    if($rw['status']==0)
                                                        {
                                                            echo "Pending Approval";
                                                        }else if($rw['status']==1)
                                                        {
                                                            echo "Mark As Completed";
                                                        }else if($rw['status']==2)
                                                        {
                                                            echo "Completed";
                                                        }
                                                        else if($rw['status']==3)
                                                        {
                                                            echo "Approved By Admin";
                                                        }

                                                    echo '"></div></div>';
                                                    } 
                                                }
                                                else{
                                                    echo "<div style='margin:40px'><p style='color:#888;'>No request yet.</p></div>";
                                                }

                                             ?>
                                        

                                        </div>
                                        <div class="au-task__footer">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--black"></div>
                                        <h3>
                                            <i class="zmdi zmdi-comment-text"></i>New Messages</h3>
                                        
                                    </div>
                                    <div class="au-inbox-wrap js-inbox-wrap">
                                        <div class="au-message js-list-load">
                                            <div class="au-message__noti">
                                                <p class="msg-quantity-txt">
                                                    <!-- display the number of messages -->
                                                </p>
                                            </div>
                                             <div class="au-message-list">
                                            <?php 

                                                $q_conversation = 'SELECT chat.s_email,chat.message,chat.date,register.pic,register.gender,register.online,register.fname,register.lname FROM chat,register where r_email ="'.$_SESSION['email'].'" AND chat.s_email=register.email GROUP BY s_email ORDER BY date DESC LIMIT 5';
                                               // $q_conversation = "SELECT * FROM chat AS T1 INNER JOIN ( SELECT MAX(msgid),s_email FROM chat GROUP BY s_email ) AS T2 ON T1.msgID=T2.msgID";

                                                //SELECT * FROM chat AS T1 INNER JOIN ( SELECT MAX(msgid) as maxid,s_email FROM chat where r_email="omer@gmail.com" GROUP BY s_email ) AS T2 ON T1.msgid=T2.maxid
                                                $r_conv=$conn->query($q_conversation);
                                                if($r_conv->num_rows>0)
                                                {
                                                    while ($r=$r_conv->fetch_assoc()) {
                                                        echo 
                                                        '
                                                            <div class="au-message__item" id="'.$r['s_email'].'">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap ';
                                                            if($r['online']==1)
                                                                    {
                                                                        echo "online";
                                                                    }
                                                                    else{
                                                                        echo "";
                                                                    }
                                                            echo '">
                                                                <div class="avatar">
                                                                    <img src="';
                                                                    echo $r['pic'];

                                                                    echo '" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">'.$r['fname'].' '.$r['lname'].'</h5>
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
                                                
                                            </div>
                                            <div class="au-message__footer">
                                                
                                            </div>
                                        </div>
                                        <div class="au-chat">
                                            <div class="au-chat__title back" >
                                                <div class="au-chat-info msg-title">
                                                    <span style="padding-right: 10px;color:#222" class="fa fa-arrow-left">
                                                        
                                                    </span>
                                                    
                                                    
                                                    
                                                
                                                </div>
                                            </div>
                                            <div class="au-chat__content display-msg">

                                                
                                            </div>
                                            <div class="au-chat-textfield">
                                                
                                                    <input class="au-input au-input--full au-input--h65 message_box" type="text" placeholder="Type a message">
                                                    <input type="button" style="float:right; " value="send" class="btn btn-default send_btn">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © Shaukat Khanum Blood Donors Club </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->

   




<!--**************************************************************************************************-->
    <!-- modal large -->
            <div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#007bff;color:#fff">
                            <h4 class="modal-title" style="color: #fff">Request For Blood</h4>
                        <button type="button" class="close" data-dismiss="modal" style="color:#fff">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form action="request_handle.php"  method="post" onsubmit="return validateData()">  
                          
                          Request Title: <br><input type="text" name="title" id="t" class="form-control au-input au-input--full au-input--h65" placeholder="Enter Title " onfocus="tchange()" style="width:100%;">
                          <br>
                          Blood Group: <br> <select name="bloodgrp" id="bloodgrp" class="form-control au-input au-input--full au-input--h65 " style="width: 20%">
                            <option value="A+">A+</option>
                            <option value="B+">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="O+">O+</option>
                            <option value="A-">A-</option>
                            <option value="B-">B-</option>
                            <option value="AB-">AB-</option>
                            <option value="O-">O-</option>
                          </select>
                          <br>
                          Description: <br><textarea name="body" class="form-control au-input au-input--full au-input--h65 " id="b"  onfocus="tchange()"  rows="5" placeholder="Please Write your request....."></textarea>
                          <span>
                          
                       </span>
                        </span>
                        <input type="text" hidden value="0" name="role">
                        <div><input type="submit" name="request_submit_btn" style="margin: 10px 0px; " class="btn btn-primary btn-lg"></div>
                       
                        </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- end modal large -->
<!-- donor request donations modal -->
<!-- modal large -->
            <div class="modal fade" id="donorModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#007bff;">
                            <h4 class="modal-title" style="color:#fff">Donate Blood</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form action="request_handle.php"  method="post" onsubmit="return validateData()">  
                          
                          Donation Title: <br><input type="text" name="title" id="t" class="form-control au-input au-input--full au-input--h65" placeholder="Enter Title " onfocus="tchange()" style="width:100%;">
                          <br>
                          Blood Group: <br> <select name="bloodgrp" id="bloodgrp" class="form-control" style="width: 20%">
                            <option value="A+">A+</option>
                            <option value="B+">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="O+">O+</option>
                            <option value="A-">A-</option>
                            <option value="B-">B-</option>
                            <option value="AB-">AB-</option>
                            <option value="O-">O-</option>
                          </select>
                          <br>
                          Description: <br><textarea name="body" class="form-control au-input au-input--full au-input--h65" id="b"  onfocus="tchange()"  rows="5" placeholder="Please Write your request....."></textarea>
                          <span>
                          
                       </span>
                        </span>
                        <input type="text" hidden value="1" name="role">
                        <div><input type="submit" name="request_submit_btn" style="margin: 10px 0px; " class="btn btn-primary btn-lg"></div>
                       
                        </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- end modal large -->
 <!--***********************************************************************************************-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    
    <script src="js/main2.js"></script>
    
    <!-- Bootstrap JS-->
    
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    
    
    <script src="vendor/animsition/animsition.min.js"></script>
    
    
    

    <!-- Main JS-->
    
<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
