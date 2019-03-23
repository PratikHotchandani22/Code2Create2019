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

//adding values to db
if(isset($_POST['submit']))
	{
		$Name = $_POST['Name'];
		$Email = $_POST['Email'];
		$Req = $_POST['Req'];
		$ExQuo = $_POST['ExQuo'];
		$CNO = $_POST['CNO'];


	}

	$sql = "INSERT INTO NWT (Name,Email,Req,ExQuo,CNO)
	VALUES('$Name','$Email', '$Req','$ExQuo', '$CNO')";

	
	if($conn->query($sql)===TRUE)
	{
		echo "New record added successfully";
	}

	else
	{
		"Error: " . $sql . "<br>" . $conn->error;

	}

?>