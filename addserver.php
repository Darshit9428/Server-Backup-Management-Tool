﻿<?php
session_start();
include("connection.php");
    $id = $_SESSION['id'];
    $sqlr = "SELECT * FROM serverlogindetail WHERE user_id = '$id'" ;
    $result = mysqli_query($connection,$sqlr);
    $uid = $_SESSION['id'];
    $sqlv = "SELECT * FROM user_reg WHERE id = '$uid'";
    $ra = mysqli_query($connection,$sqlv);
    $rrow = mysqli_fetch_array($ra);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
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
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-chart-bar"></i>Subsription Plans</a>
                        </li>

                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h4>SERVER BACKUP TOOL</h4>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="home.php">
                                <i class="fa fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="active has-sub">
                            <a href="addserver.php">
                                <i class="fa fa-mail-forward"></i>Add Server</a>   
                        </li>
                        <li>
                            <a href="serverview.php">
                                <i class="fa fa-eye"></i>View My server</a>
                        </li>
                        <li>
                            <a href="transfer.php">
                                <i class="fa fa-cog"></i>Transfer Data</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $rrow['Name'] ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $rrow['Name'] ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $rrow['Email'] ?></span>
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
                                    <h2 class="title-1">Add Server</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                           
                            <div class="card-body">
                                <!--<button type="button" class="btn btn-primary btn-lg">Add Server</button>
                                <a href="addwebsite.php"><button type="button" class="btn btn-secondary btn-lg" disabled>Add Website</button></a>
                                <button type="button" class="btn btn-warning btn-lg"  disabled>Schedule</button>
                                <button type="button" class="btn btn-danger btn-lg" disabled>Transfer</button><br/><br/>-->
                                <form action="process.php" method="post">
                                    <div class="form-group">
                                        <label>Server name</label>
                                        <input class="au-input au-input--full" type="text" name="serverName" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Ftp host</label>
                                        <input class="au-input au-input--full" type="text" name="ftphost" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Ftp username</label>
                                        <input class="au-input au-input--full" type="text" name="ftpuser" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Ftp Passord</label>
                                        <input class="au-input au-input--full" type="password" name="ftppass" required=""></p>
                                    </div>
                                       
                                    
                                    <input type="submit" name="addserver" value="Save" class="btn btn-primary btn-md" class="button stroke">
                                               
                                </form>
                            </div>

                                    
                            
                            <!-- MAIN CONTENT-->
                        </div>
    <!-- END PAGE CONTAINER-->
    <div class="row">
                                <div class="col-md-12">
                                    <div class="copyright">
                                        <p>Copyright © Backup management services 2018 . All rights reserved.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->