﻿<?php
session_start();
include("connection.php");
$uid = $_SESSION['id'];
    $sqlk = "SELECT * FROM user_reg WHERE id = '$uid'";
    $ra = mysqli_query($connection,$sqlk);
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
                                    <li>
                                        <a class="js-arrow" href="addserver.php">
                                            <i class="fa fa-mail-forward"></i>Add Server</a>   
                                        </li>
                                        <li>
                                            <a href="serverview.php">
                                                <i class="fa fa-eye"></i>View My server</a>
                                            </li>
                                            <li class="active has-sub">
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
                                         <div class="container-fluid">
                                             <div class="au-card m-b-30">
                                                <div class="au-card-inner">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="overview-wrap">
                                                                <h2 class="title-1">Transfer</h2>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <form action="connectserver.php" method="POST">
                                                        <table class="display table">
                                                            <tr>
                                                                <td><input type="button" class="btn btn-success btn-md form-control" value="Server 1" name="server1"></button></td>
                                                                <td><select name="sname" id="brand" class="form-control">
                                                                    <option disabled selected="">Server List</option>
                                                                    <?php
                                                                    $sql = mysqli_query($connection, "SELECT servername From serverlogindetail WHERE user_id = '$uid'");
                                                                    $row = mysqli_num_rows($sql);
                                                                    while ($row = mysqli_fetch_array($sql)){
                                                                        echo "<option value='". $row['servername'] ."'>" .$row['servername'] ."</option>" ;
                                                                    }
                                                                    ?>
                                                                </select></td>
                                                                <td><div id="show_product">
                                                                    <input type="text" placeholder="Host" class="form-control" name="host1" id="h1">
                                                                </div>  </td>
                                                                <td><div>
                                                                    <input type="text" placeholder="Path" class="form-control" name="path1">
                                                                </div>  </td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="button" class="btn btn-success btn-md form-control" value="Server 2" name="server2"></button></td>
                                                                <td><select name="sname2" id="brand2" class="form-control">
                                                                    <option disabled selected="">Server List</option>
                                                                    <?php
                                                                    $sql = mysqli_query($connection, "SELECT servername From serverlogindetail WHERE user_id = '$uid'");
                                                                    $row = mysqli_num_rows($sql);
                                                                    while ($row = mysqli_fetch_array($sql)){
                                                                        echo "<option value='". $row['servername'] ."'>" .$row['servername'] ."</option>" ;
                                                                    }
                                                                    ?>
                                                                </select></td>
                                                                <td><div id="show_product2">
                                                                    <input type="text" placeholder="Host" class="form-control" name="host2" id="h2">
                                                                </div>  </td>
                                                                <td><div>
                                                                    <input type="text" placeholder="Path" class="form-control" value="" name="path2">
                                                                </div>  </td>
                                                            </tr>
                                                            
                                                        </table>
                                                        <button type="submit" class="btn btn-secondary btn-lg btn-block" name="sub1">Transfer Your Data</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="section__content section__content--p30">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="copyright">
                                                            <p>Copyright © Backup management services 2018 . All rights reserved.</p>
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
                                    <script>
                                        $(document).ready(function(){
                                            $('#brand').change(function(){
                                                var brand_id = $(this).val();
                                                $.ajax({
                                                    url:"load_data.php",
                                                    method:"POST",
                                                    data:{brand_id:brand_id},
                                                    success:function(data){
                                                        $('#h1').val(data);
                                                    }
                                                });
                                            });
                                        });
                                        $(document).ready(function(){
                                            $('#brand2').change(function(){
                                                var brand_id2 = $(this).val();
                                                $.ajax({
                                                    url:"load_data.php",
                                                    method:"POST",
                                                    data:{brand_id2:brand_id2},
                                                    success:function(data){
                                                        $('#h2').val(data);
                                                    }
                                                });
                                            });
                                        });
                                    </script>
                                    <!-- end document-->
