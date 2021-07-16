<?php 
include('connection.php');
if($_SESSION['email'] == "")
{
  header("location: login.php");

}


 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Shaukat Khanum Blood Donors Club.We have helped a lot of people">
   
    <meta name="keywords" content="Shaukat Khanum Blood Donors Club">

    <!-- Title Page-->
    <title>Shaukat Khanum Blood Donors Club</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">

    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link href="css/style.css" rel="stylesheet" media="all">
    
    
</head>

<body class="animsition" style="background-color: #fff">
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
                            <a href="view_request.php">
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
                <a href="dashboard.php">
                    <img src="images/icon/logo.png" alt="logo" />
                </a>
                <hr>
            </div>
            <div class="menu-sidebar__content js-scrollbar1" style="background-color: #262f3d">
                <div class="profile-pic">
                                <img src="<?php
                                                $q_get_p = 'SELECT pic from register where email = "'.$_SESSION['email'].'"';
                                                $r_p=$conn->query($q_get_p);
                                                if($r_p->num_rows>0)
                                                {
                                                    $r=$r_p->fetch_assoc();
                                                    echo $r['pic'];
                                                }
                                                     ?>" alt="dp" class="p-pic">
                                                
                                <button class="btn btn-primary" data-toggle="modal" data-target="#changeModal" style="margin: 8px 8px 50px 8px"><i class="fa fa-edit"></i> Change Profile Pic</button>
                              </div>
<br>

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
                            <a href="view_request.php">
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

                                                $q_conversation = 'SELECT chat.s_email,chat.message,chat.date,register.gender,register.online,register.fname,register.lname FROM chat,register where r_email ="'.$_SESSION['email'].'" AND chat.s_email=register.email GROUP BY s_email ORDER BY date DESC LIMIT 3';
                                               // $q_conversation = "SELECT * FROM chat AS T1 INNER JOIN ( SELECT MAX(msgid),s_email FROM chat GROUP BY s_email ) AS T2 ON T1.msgID=T2.msgID";
                                                $r_conv=$conn->query($q_conversation);
                                                if($r_conv->num_rows>0)
                                                {
                                                    while ($r=$r_conv->fetch_assoc()) {
                                                        echo 
                                                        '
                                                          <div class="mess__item">
                                                            <div class="image img-cir img-40">
                                                                <img src="';
                                                                if($r['gender']=='male')
                                                                        {
                                                                            echo 'images/male.png';
                                                                        }else if($r['gender']=='female')
                                                                        {
                                                                            echo 'images/female.png';
                                                                        }
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
                                                <a href="all_notifications">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php
                                                $q_get_pic = 'SELECT pic from register where email = "'.$_SESSION['email'].'"';
                                                $r_pic=$conn->query($q_get_pic);
                                                if($r_pic->num_rows>0)
                                                {
                                                    $row=$r_pic->fetch_assoc();
                                                    echo $row['pic'];
                                                }
                                                     ?>" style="border-radius: 50%" alt="Shaukat Khanum Blood Donors Club" />
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
                                                           echo $row['pic'];

                                                         ?>
                                                        " style="border-radius: 50%" alt="" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION['name']; ?></a>
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
            <div class="maincontent">
               
                    <div class="">
                        <div class="row">
                           <div class="cover" >
                                <i style="float: right;margin-top: 10px;margin-right: 30px;color: #666" class="fa fa-camera fa-2x"></i>
                                <h2 style="margin-top: 300px;margin-left:40px;color: #fff"><?php echo $_SESSION['name']; ?></h2>
                                <p style="margin-left: 40px;color: #ddd">Software Engineer</p>
                            </div><!-- end of cover -->
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Contact Information</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Bio Data</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Recent Activities</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content pl-3 p-1" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                <h3>Contact Information</h3>
                                                <p>Name : </p><h6><?php echo $_SESSION['name']; ?></h6>
                                                <p>Mobile : </p><h6><?php echo $_SESSION['mobile']; ?></h6>
                                                <p>Address : </p><h6>djhfkdjfdjdkjgdgjfkgjfkgjfk</h6>
                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <h3>Bio Data</h3>
                                                <p>Gender : </p><h6><?php echo $_SESSION['gender']; ?></h6>
                                                <p>Blood Group : </p><h6><?php echo $_SESSION['bloodgrp']; ?></h6>
                                            </div>
                                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                                <h3>Menu 2</h3>
                                                <p>Some content here.</p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div><!--end of column -->
                        </div><!--end of row -->
                        
       
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © Shaukat Khanum Blood Donors Club. All rights reserved.</p>
                                </div>
                            </div>
                        </div><!--end of footer row -->
                    </div><!-- end of container -->
               
            </div>
            <!-- END MAIN CONTENT-->

<!-- modal large -->
            <div class="modal fade" id="changeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#007bff;">
                            <h4 class="modal-title" style="color:#fff">Change Profile Picture</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div style="padding: 30px">
                            <form action="changedp.php"  method="post" enctype="multipart/form-data">
                            Please Choose the picture you wanna upload :
                            
                            <br>  
                            <input type="hidden" value="100000" name="MAX_FILE_SIZE">
                            <input type="file" name='fileup'>
                            <br>
                        <div><input type="submit" name="upload" value="Upload" style="margin: 10px 0px; " class="btn btn-primary "></div>
                        </div>
                       
                        </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- end modal large -->

            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <script src="vendor/jquery-3.2.1.min.js"></script>
 <!-- Bootstrap JS-->
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
   
    <script src="vendor/animsition/animsition.min.js"></script>
    
  
 
 <script src="js/main2.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <!-- Jquery JS-->
    
    

   

</body>

</html>
<!-- end document-->
