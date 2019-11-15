<?php
    session_start();
    include("connect.php");
    $id = $_GET['edit'];
    $update = "SELECT * FROM serverlogindetail WHERE id = $id";
    $result = mysqli_query($cnn,$update);
    if(isset($_POST['update'])){
        $servername = $_POST['servername'];
        $host = $_POST['host'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $res = "UPDATE `serverlogindetail` SET `servername` = '$servername', `host` = '$host', `user` = '$user', `pass` = '$pass' WHERE `id` = '$id'";
        $a = mysqli_query($cnn,$res);
        if($a)
        {
            echo "<script>alert('success');window.location.href = 'serverview.php';</script>";

            //header("location:serverview.php");
        }
        else{
            echo "error";
        }
    }

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
                            <a href="addcloud.php">
                                <i class="fa fa-arrow-right"></i>Add Cloud Drive</a>
                        </li>
                        <li class="active has-sub">
                            <a href="serverview.php">
                                <i class="fa fa-eye"></i>View My server</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-cog"></i>Manage Backup Data</a>
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
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['log'] ?></a>
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
                                                        <a href="#">Tushar</a>
                                                    </h5>
                                                    <span class="email">Tushar@gmail.com</span>
                                                </div>
                                            </div>
                                            
                                            <div class="account-dropdown__footer">
                                                <a href="index.php">
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
                      <!-- END PAGE CONTAINER-->
    <!-- MAIN CONTENT-->
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Detail</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                                $id = $row['id'];
                                                $servername = $row['servername'];
                                                $host = $row['host'];
                                                $user = $row['user'];
                                                $pass = $row['pass'];
                                            }
                                            ?>
                                            <form action="#" method="post">
                                            <tr>
                                                <td>Id</td>
                                                <td><div class="form-group">
                                                        <input type="text" name="disabled-input" placeholder="<?php echo $id ?>" disabled="" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>ServerName</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input name="servername" type="text" class="form-control" value="<?php echo $servername; ?>">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Host</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input name="host" type="text" class="form-control" value="<?php echo $host; ?>">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Username</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input name="user" type="text" class="form-control" value="<?php echo $user; ?>">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>password</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input name="pass" type="text" class="form-control" value="<?php echo $pass; ?>">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <input type="submit" name="update" value="Update" class="btn btn-success btn-md" class="button stroke">
                            </form>
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
