<!DOCTYPE html>
<html>
<head>
	<title>User Deletion Page</title>
</head>
<body>
	<?php 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'assessments');

/* Attempt to connect to MySQL database */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

	 	// Recieve values from POST one by one
	/*	 if(isset($_GET["user_id"])) {
			 
			$user_id = $_GET["user_id"];
			$first_name   = $_GET["first_name"];
			$last_name    = $_GET["last_name"];
			$email        = $_GET["email"];
			$password     = $_GET["password"];
			$phone_number = $_GET["phone_number"];
		} else {
			echo 'Please provide User ID in URL';
			exit;
		}*/
	// Attempt delete user query execution
	try{
		$delete_sql="DELETE FROM users WHERE user_id = 1;";
		
		$pdo->exec($delete_sql);
		echo "Record deleted successfully";
		
	} catch(PDOException $a){
		die("ERROR: Could not able to execute $delete_sql. " . $a->getMessage());
	}
	 // Close connection
unset($pdo);

/*
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

		//Write DELETE Query here
		$sql = "";

		if ($conn->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();*/
?>
	
</body>
</html>