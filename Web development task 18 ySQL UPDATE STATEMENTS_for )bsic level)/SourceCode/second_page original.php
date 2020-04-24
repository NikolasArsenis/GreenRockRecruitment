<!DOCTYPE html>
<html>
<head>
	<title>User Submission Form via AJAX</title>
</head>
<body>
	<?php 
	
		// Recieve values from POST one by one
		if(isset($_POST["first_name"])) {
			$first_name = $_POST["first_name"];
		} else {
			$first_name = "";
		}

		// write validations code if any of the validation fails the record should not be submitted into the database.

		$servername = "localhost";
		$username = "username";
		$password = "password";
		$dbname = "myDB";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		//Write Update Query here for User form
		$sql = "";

		if ($conn->query($sql) === TRUE) {
		    echo "Record updated successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
?>
	
</body>
</html>