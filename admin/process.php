<?php
if(isset($_POST['submit']))
{
	$r_name=$_POST['name'];
		 $r_email=$_POST['email'];
		 $r_birthdate=$_POST['birthdate'];
		 $r_qualification=$_POST['qualification'];
		 $r_address=$_POST['address'];
		 $r_institute=$_POST['institute'];
		 
		 
		 
		 
		 

		 include 'admin/connection/_openconn.php';
      $q="INSERT INTO register_master (`r_id`, `r_name`, `r_email`, `r_BDate`, `r_qualification`, `r_institute`, `r_address`) VALUES (NULL, '".$r_name."', '".$r_email."', '".$r_birthdate."', '".$r_qualification."', '".$r_institute."', '".$r_address."')";
		$c=mysqli_query($dbhandle,$q);
					if($c)
					{
						 $error = 'You are registered Successfully.';
						 header("Location:registration.php?message=".$error);
					}
					else
					{
						$error = 'Sorry, Data is not Submitted.';
						header("Location:registration.php?message=".$error);
					}
}
?>       
