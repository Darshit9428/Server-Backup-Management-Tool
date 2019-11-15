<?php
class model
{
	public function index()
	{
    include("connect.php");
    if (!$cnn)
  	{
 		die("Connection error: " . mysqli_connect_error());
  	}
	

	/* if ($con->connect_error) {
    	die("Connection failed: " . $con->connect_error);
		} 
			echo "Connected successfully";*/

	}




	//====================================registration button==================================//
    public function reg($Name,$Email,$Contact,$Country,$Username,$Password)
	{
	    include("connect.php");
	 	  $reg="insert into user_reg(Name,Email,Contact_No,Country,Username,Password)
		 values('$Name','$Email','$Contact','$Country','$Username','$Password')";
		 $a=mysqli_query($cnn,$reg);
		return $a;
		
		 
		
	}  
	public function addserver($servername,$host,$user,$pass)
	{
	     include("connect.php");
		 $addserver="insert into serverlogindetail(servername,host,user,pass)
		 values('$servername','$host','$user','$pass')";
		
		 mysqli_query($cnn,$addserver);
		 echo "<script>alert('Data inserted Successfully');</script>";
		
		 
		
	}  
	public function addwebsite($website,$Servername,$protocol,$port)
	{
	    
		 $addwebsite="insert into website_detail(Website_URL,Server_Name,Protocol,port)
		 values('$website','$Servername','$protocol','$port')";
		
		 mysqli_query($cnn,$addwebsite);
		 echo "<script>alert('Data inserted Successfully');</script>";
		
		 
		
	}  

//=/================login==========//
	public function Login($Email,$Password)
	 {
	 	  include("connect.php");
	 	  $q="select * from user_reg where Email='$Email' AND Password='$Password'";
		  $sel=mysqli_query($cnn,$q);
		  $num_row=mysqli_num_rows($sel);
		  return $num_row;
		  
	 }

}
?>