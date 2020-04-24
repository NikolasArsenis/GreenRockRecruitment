<!DOCTYPE html>
<html>
<head>
	<title>User Submission Form via AJAX</title>
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
 
if (!empty($_POST["first_name"]) && $_POST["last_name"] && $_POST["email"] && $_POST["password"] && $_POST["phone_number"]) {
    $first_name   = $_POST["first_name"];
    $last_name    = $_POST["last_name"];
    $email        = $_POST["email"];
    $password     = $_POST["password"];
	$phone_number = $_POST["phone_number"];
	
	
	// Attempt to update database query execution
	try{
		$updsql ="UPDATE `users` SET `user_id`=1,`first_name`='john',`last_name`='malkovich',`email`='youremail@gmail.com',`password`='123',`phone_number`='12345',`created_at`=created_at,`updated_at`=updated_at WHERE user_id=2";
		
		$pdo->exec($updsql);
		echo "<br>"."Users information updated in the table.";
		
	} catch(PDOException $u){
		die("ERROR: Could not able to execute $updsql. " . $u->getMessage());
	}

} else {
    $first_name   = "";
    $last_name    = "";
    $email        = "";
    $password     = "";
    $phone_number = "";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>second_page</title>
</head>
<body>
	
</body>
</html>
	<?php 
	/*
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
		$sql = "UPDATE";

		if ($conn->query($sql) === TRUE) {
		    echo "Record updated successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();*/
?>
	
</body>
</html>