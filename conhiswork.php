<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tender";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$WD = $_POST['WD'];
		$AvgQ = $_POST['AvgQ'];

	}

	$sql = "INSERT INTO History (name,email,WD,AvgQ)
	VALUES('$name','$email', '$WD','$AvgQ')";

	if($conn->query($sql)===TRUE)
	{
		echo "New record added successfully";
	}

	else
	{
		"Error: " . $sql . "<br>" . $conn->error;

	}
	

?>