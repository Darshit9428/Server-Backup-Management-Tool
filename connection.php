<?php
 $connection= mysqli_connect('localhost','root','','Server_tool');
	 

	if (!$connection)
  	{
 		die("Connection error: " . mysqli_connect_error());
  	}
  
?>