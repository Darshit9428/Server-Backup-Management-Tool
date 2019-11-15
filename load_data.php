<?php
	include('connection.php');
	$output = '';
	if(isset($_POST["brand_id"]))
	{
		if($_POST["brand_id"]!='')
		{
			$sql = "SELECT `host` FROM `serverlogindetail` WHERE `servername` = '".$_POST["brand_id"]."'";
		}
		else
		{
			$sql = 	"SELECT * FROM `serverlogindetail`";
		}
		$result = mysqli_query($connection, $sql);
		while ($row = mysqli_fetch_array($result)) {
			$output .= $row['host']; 
		}
		echo $output;
	}
	if(isset($_POST["brand_id2"]))
	{
		if($_POST["brand_id2"]!='')
		{
			$sql = "SELECT `host` FROM `serverlogindetail` WHERE `servername` = '".$_POST["brand_id2"]."'";
		}
		else
		{
			$sql = 	"SELECT * FROM `serverlogindetail`";
		}
		$result = mysqli_query($connection, $sql);
		while ($row = mysqli_fetch_array($result)) {
			$output .= $row['host']; 
		}
		echo $output;
	}
?>