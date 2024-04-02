<?php
$servername = "localhost";  // Replace with your MySQL server hostname
$username = "root";  // Replace with your MySQL username
$password = "JT@123";  // Replace with your MySQL password
$database = "test";  // Replace with your MySQL database name


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{

//echo "connection created successfully";
$name = $_POST['name'];
 $email = $_POST['email'];
$Mobile = $_POST['subject'];
$checkbox_values = $_POST['data'];
 $requirement = $_POST['message'];
 // Process checkbox values
if (isset($_POST['data']) && is_array($_POST['data'])) {
    $checkbox_values = implode(', ', $_POST['data']);
} else {
    $checkbox_values = ''; // Default value if checkboxes are not selected
}



$sql = "INSERT INTO project VALUES ('$name','$email','$Mobile','$checkbox_values','$requirement')";
		$result=mysqli_query($conn, $sql);
	if($result)
	{
		echo"<script>window.alert('Successfully Registered, We Will Get back to You Very Soon')
		 window.location='index.php'; 
			</script>";
	}
	else{			die(mysqli_error($conn));
	} 

}

?>