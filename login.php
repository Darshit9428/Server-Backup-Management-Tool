<?php
include('connection.php');
session_start();
if (isset($_SESSION['email']))
{
    echo "<script>alert('You R already Login');window.location.href = 'home.php';</script>";
}
?>
<!DOCTYPE html>
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

            <a href="index.php" title="login" class="button button-primary cta">Home</a>
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
	    	<legend ><h3 data-aos="fade-up"><b>Log in with E-mail or Phone no.</b></h3></legend>
            <form action="process.php" method="post">
			     <p align="left" font="Times New Roman" style="color:white;font-size:20px;"><b>User ID:</b></p>
			     <p align="left" font="Times New Roman">
				    <input type="email" name="Email" placeholder="Email address" style=" width: 80%;padding: 15px;display: inline-block;border: none;background: #f1f1f1;background-color:#ddd" required>
                 </p>
			     <p align="left" font="Times New Roman" style="color:white;font-size:20px;"><b>Password:</b></p>
			     <p align="left" font="Times New Roman">
				    <input type="password" id="pwd" name="Password" placeholder="Password" style=" width: 80%;padding:15px;display: inline-block;border: none;background: #f1f1f1;background-color:#ddd" required>
                 </p>
			     <div class="buttons">
                        
				
						<input type="submit" name="Login" value="Login" class="button stroke">
                        <a href="register.php" class="button stroke">
                            Sign-Up
                        </a>
                        
                        <br>
            </div> 
        </form>
	</fieldset>
    </div> 
	</div>
</div>
</div>	

    </section> <!-- end home -->  


      


    <!-- footer
    ================================================== -->
    <footer>

        <div class="footer-main">
            <div class="row">  

                

                <div class="col-three md-1-3 tab-1-2 mob-full footer-contact">

                    <h4>Contact</h4>

                    

                    <p>
                    SBtoolpvtltd@gmail.com <br>
                    Phone: (+91) 987 26100 <br>
                    Fax: (+91) 987 26110    
                    </p>                    

                </div> <!-- end footer-contact -->  

                <div class="col-two md-1-3 tab-1-2 mob-full footer-site-links">

                    <h4>Site Links</h4>

                    <ul class="list-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>	      		
                            
                </div> <!-- end footer-site-links --> 

                <div class="col-four md-1-2 tab-full footer-subscribe">

                    <h4>Know More About our Services</h4>

                    <p>By submitting your email you can know more about our services.We will send our new feeds and updates at your email.</p>

                    <div class="subscribe-form">
                
                        <form id="mc-form" class="group" novalidate="true">

                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required=""> 
                
                            <input type="submit" name="subscribe" value="Send">
                
                            <label for="mc-email" class="subscribe-message"></label>
                
                        </form>

                    </div>	      		
                            
                </div> <!-- end footer-subscribe -->         

            </div> <!-- /row -->
        </div> <!-- end footer-main -->


      <div class="footer-bottom">

      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span> Copyright SERVER BACKUP TOOL 2018.</span> 
		         	<span>Design by SB tool Pvt Ltd.</span>		         	
		         </div>

		         <div id="go-top">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> <!-- end footer-bottom -->     	

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