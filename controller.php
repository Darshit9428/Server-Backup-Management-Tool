<?php
error_reporting(0);
	date_default_timezone_set("Asia/Kolkata");
     include('model.php');
	 $obj=new model();
	 $obj->index();
	
	
	 //================================================reg=================================//					
	  if(isset($_REQUEST['submit']))
	 {
      $Name=$_REQUEST['Name'];
	  $Email=$_REQUEST['Email'];
	  $Contact=$_REQUEST['Contact'];
	  $Country= $_REQUEST['Country'];
	  $Username= $_REQUEST['Username'];
	  $sPassword= $_REQUEST['Password'];
	  $Password=md5($sPassword);
	 
	  $obj->reg($Name,$Email,$Contact,$Country,$Username,$Password);
		header("location:login.php");
	 }

	 if(isset($_REQUEST['addserver']))
	 {
      $Name=$_REQUEST['Name'];
	  $address=$_REQUEST['address'];
	  	 
	  $obj->addserver($Name,$address);
		header("location:addwebsite.php");
	 }

	 if(isset($_REQUEST['addwebsite']))
	 {
      $website=$_REQUEST['website'];
	  $Servername=$_REQUEST['Servername'];
	  $protocol=$_REQUEST['protocol'];
	  $port=$_REQUEST['port'];
	  	 
	  $obj->addserver($website,$Servername,$protocol,$port);
		header("location:home.php");
	 }



	  //============================login===============================//
	 
	  if(isset($_REQUEST['Login']))
	         {
				
 		         $Email = $_REQUEST['Email'];
		         $Password = $_REQUEST['Password'];
				 $num_row=$obj->Login($Email,$Password);
				
		         {
			        if($num_row>0)
		           {
					  session_start();
					$_SESSION['log']=$Email;
			  
			  
			          header("location:home.php");
		            }
		            else
		           {
			           die( "login Failed");
		           }
		        }
			 }
?>