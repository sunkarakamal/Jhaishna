<?php
	include "config.php";
	$name=$_POST["name"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$message=$_POST["message"];
	$insert="insert into form(name,email,phone,message)VALUES('".$name."','".$email."','".$phone."','".$message."')";
		$result=mysqli_query($con, $insert);
	if($result)
	{
		echo"<script>window.alert('Successfully Registered, We Will Get back to You Very Soon')
		 window.location='index.php'; 
			</script>";
	}
	else{			die(mysqli_error($con));
	} 
?>
