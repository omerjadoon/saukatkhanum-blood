<?php 
include('connection.php');
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
    <meta name="description" content="Shaukat Khanum Blood Donors Club.We have helped a lot of people">
    
    <meta name="keywords" content="Shaukat Khanum Blood Donors Club">

    <!-- Title Page-->
    <title>Shaukat Khanum Blood Donors Club</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/style.css">
   
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
                        <a class="logo"  href="dashboard.php">
                            <img src="images/icon/logo.png"  alt="Shaukat Khanum Blood Donors Club" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- navbar for mobile -->
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
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
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block" >
            <div class="logo" >
                <a href="dashboard.php">
                    <img src="images/icon/logo.png" alt="Shaukat Khanum Blood Donors Club" />
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
                                            <img src="<?php 
                                                echo $_SESSION['pic'];

                                             ?>" style="border-radius: 50%" alt="Shaukat Khanum Blood Donors Club" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['name']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="profile.php">
                                                        <img src="<?php 
                                                            echo $_SESSION['pic'];

                                                         ?>" style="border-radius: 50%" alt="" />
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