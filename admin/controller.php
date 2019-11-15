<?php
//error_reporting(0);
	date_default_timezone_set("Asia/Kolkata");
     include('model.php');
	 $obj = new model();
	 $obj->index();
	
	
	 //================================================reg=================================//					
	  if(isset($_REQUEST['submit']))
	 {
      $Name=$_REQUEST['Name'];
	  $Email=$_REQUEST['Email'];
	  $Contact=$_REQUEST['Contact'];
	  $Country= $_REQUEST['Country'];
	  $Username= $_REQUEST['Username'];
	  $Password= $_REQUEST['Password'];
	  //$Password=sha1($sPassword);

	  
	 
	  $a=$obj->reg($Name,$Email,$Contact,$Country,$Username,$Password);
		if(!$a)
		           {
			          
		           		print_r($a);
			           die( "no result");
		            }
		            else
		           {
			           header("location:login.php");
		           }
	 }

	 if(isset($_REQUEST['addserver']))
	 {
	  $servername=$_POST['servername'];	
      $host=$_POST['ftphost'];
	  $user=$_POST['ftpuser'];
	  $pass=$_POST['ftppass'];
	  	 
	  $obj->addserver($servername,$host,$user,$Pass);
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
		         //$Password = sha1($aPassword);
				 $num_row=$obj->Login($Email,$Password);
				//echo $q;
		         {
			        if($num_row>0)
		           {
		           		echo $num_row;

		           	session_start();
					$_SESSION['log']=$Email;
			  
			  
			          header("location:home.php");
		            }
		            else
		           {
		           		echo $num_row;
			           die( "login Failed");
		           }
		        }
			 }
?>