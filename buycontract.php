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
		$Amount = $_POST['Minamount'];
		$Date = $_POST['Date'];
	}

	$sql = "INSERT INTO BuyContract (Amount,DateMax)
	VALUES('$Amount','$Date')";
if($conn->query($sql)===TRUE)
	{
		echo "New record added successfully";
	}

	else
	{
		"Error: " . $sql . "<br>" . $conn->error;

	}
	

?>
