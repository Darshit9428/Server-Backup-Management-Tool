<?php
	include('connection.php');
	session_start();
	
	if(isset($_POST['Login'])){
		$user = $_POST['Email'];
		$pass = $_POST['Password'];
		$sql = "SELECT * FROM user_reg WHERE `Email` = '$user' AND `Password` = '$pass'";
		$a = mysqli_query($connection,$sql);
		$num_row=mysqli_num_rows($a);
		if($num_row>0)
		{
			$row = mysqli_fetch_array($a);
      $id = $row['id'];
      $_SESSION['id'] = $id;
			header("location: ./home.php");
		}
		else
		{
		    echo "<script>alert('Wrong ID or PASSWORD');window.location.href = 'login.php';</script>";
		}
	}
     if(isset($_REQUEST['submithome']))
     {
      $Name=$_REQUEST['Name'];
      $nest = $Name; 
// creating a nested structure directory 
   if (!mkdir($nest, 0777, true))  
   { 
     echo "<script>alert('Folders cannot be created recursively');window.location.href = 'register.php';</script>"; 
     
   } 
   else
   {   
      $Email=$_REQUEST['Email'];
      $Contact=$_REQUEST['Contact'];
      $Country= $_REQUEST['Country'];
      $Username= $_REQUEST['Username'];
      $Password= $_REQUEST['Password'];
      $sqlin = "INSERT INTO `user_reg`(`Name`, `Email`, `Contact_No`, `Country`, `Username`, `Password`) VALUES ('$Name','$Email','$Contact','$Country','$Username','$Password')";
      $t = mysqli_query($connection,$sqlin);
      if($t)
        {
            header("location:login.php");
        }
        else{
            echo "error";
        }
     } 
     }
	if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $delete = "DELETE FROM serverlogindetail WHERE id = $id";
        $re = mysqli_query($connection,$delete);
        if(!$re)
        {
        	echo $delete."error";
        }
        else{
        	header("location:serverview.php");	
        }
        
    }
    if(isset($_POST['addserver'])){

    $serverName = $_POST['serverName'];
    $ftphost = $_POST['ftphost'];
    $ftpuser = $_POST['ftpuser'];
    $ftppass = $_POST['ftppass'];
    $id = $_SESSION['id'];
    $sql = "INSERT INTO serverlogindetail(user_id,servername,host,user,pass)
         values('$id','$serverName','$ftphost','$ftpuser','$ftppass')";
    mysqli_query($connection,$sql);
    header("location: home.php");
	}
    if(isset($_POST['update'])){
    	$id = $_POST['id'];
        $servername = $_POST['servername'];
        $host = $_POST['host'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $res = "UPDATE `serverlogindetail` SET `servername` = '$servername', `host` = '$host', `user` = '$user', `pass` = '$pass' WHERE `id` = '$id'";
        $a = mysqli_query($connection,$res);
        if($a)
        {
            header("location:serverview.php");
        }
        else{
            echo "error";
        }
    }
	else{
		echo 'Something went Wrong!!! Please try again';
	}
?>

