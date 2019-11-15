<?php
include('controller.php');
?>
<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
   ================================================== -->
    <meta charset="utf-8">
    <title>LOGIN</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
   ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
   ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

   
</head>

<body id="top">

    <!-- header 
   ================================================== -->
   <header id="header" class="row">   

   		<nav id="header-nav-wrap">
            <ul class="header-main-nav">
                <li style="color:white;font-size:30px;">SERVER BACKUP TOOL</li>
                <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
                
            </ul>

            <a href="../index.php" title="login" class="button button-primary cta">Home</a>
        </nav>
		

		<a class="header-menu-toggle" href="#"><span>Menu</span></a>    	
   	
   </header> <!-- /header -->
   <!-- home
   ================================================== -->
   <section id="home" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000>
   <div class="overlay"></div>
        <div class="home-content">
		<div class="row contents">                     
                <div class="home-content-left">
	<fieldset>
	    	
            <form action="login.php" method="post">
			<p align="left" font="Times New Roman" style="color:white;font-size:20px;"><b>User ID:</b></p>
			<p align="left" font="Times New Roman">
				<input type="email" name="Email" placeholder="Email address" style=" width: 80%;padding: 15px;
				display: inline-block;border: none;background: #f1f1f1;background-color:#ddd" required></p>
			<p align="left" font="Times New Roman" style="color:white;font-size:20px;"><b>Password:</b></p>
			<p align="left" font="Times New Roman">
				<input type="password" id="pwd" name="Password" placeholder="Password" style=" width: 80%;padding:15px;
				display: inline-block;border: none;background: #f1f1f1;background-color:#ddd" required></p>
			<div class="buttons">
                        
				
						<input type="submit" name="Login" value="Login" class="button stroke">
                       
                        
                        <br>
            </div> 
        </form>
	</fieldset>
    </div> 
	</div>
</div>
</div>	

    </section> <!-- end home -->  


      


    


      

      </div>

    </footer>

    <div id="preloader"> 
    	<div id="loader"></div>
    </div>  

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/remain.js"></script>

</body>

</html>