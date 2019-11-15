<?php
class model
{
	public function index()
	{
    $cnn= mysql_connect('localhost','root','');
	 $con=mysql_select_db('Server_tool') or die(mysql_error);

	/* if ($con->connect_error) {
    	die("Connection failed: " . $con->connect_error);
		} 
			echo "Connected successfully";*/

	}




	//====================================registration button==================================//
    public function reg($Name,$Email,$Contact,$Country,$Username,$Password)
	{
	    
		 $reg="insert into user_reg(Name,Email,Contact_No,Country,Username,Password)
		 values('$Name','$Email','$Contact','$Country','$Username','$Password')";
		
		 mysql_query($reg);
		 echo "<script>alert('Data inserted Successfully');</script>";
		
		 
		
	}  
	public function addserver($Name,$address)
	{
	    
		 $addserver="insert into server_detail(Server_Name,Address)
		 values('$Name','$address')";
		
		 mysql_query($addserver);
		 echo "<script>alert('Data inserted Successfully');</script>";
		
		 
		
	}  
	public function addwebsite($website,$Servername,$protocol,$port)
	{
	    
		 $addwebsite="insert into website_detail(Website_URL,Server_Name,Protocol,port)
		 values('$website','$Servername','$protocol','$port')";
		
		 mysql_query($addwebsite);
		 echo "<script>alert('Data inserted Successfully');</script>";
		
		 
		
	}  

//=/================login==========//
	public function Login($Email,$Password)
	 {
		  $log="select*from user_reg where Email='$Email' AND Password='$Password'";
		  $sel=mysql_query($log);
		  $num_row=mysql_num_rows($sel);
		  return $num_row;
		  
	 }

}
?>