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
 
// Attempt create database query execution
try{
	$database_sql="CREATE DATABASE IF NOT EXISTS assessments;";
	
    $pdo->exec($database_sql);
	echo "Database created successfully";
	
} catch(PDOException $c){
    die("ERROR: Could not able to execute $database_sql. " . $c->getMessage());
}

try{
	$table_sql="CREATE TABLE IF NOT EXISTS users (
		`user_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		`first_name` varchar(80) NOT NULL,
		`last_name` varchar(80) NOT NULL,
		`email` varchar(100) NOT NULL,
		`password` varchar(255) NOT NULL,
		`phone_number` varchar(50) NOT NULL,
		`created_at` datetime NOT NULL DEFAULT current_timestamp(),
		`updated_at` timestamp NOT NULL DEFAULT current_timestamp()
	  )";
	
    $pdo->exec($table_sql);
	echo "<br>"."Table created successfully";
	
} catch(PDOException $t){
    die("ERROR: Could not able to execute $table_sql. " . $t->getMessage());
}

if (!empty($_POST["first_name"]) && $_POST["last_name"] && $_POST["email"] && $_POST["password"] && $_POST["phone_number"]) {
    $first_name   = $_POST["first_name"];
    $last_name    = $_POST["last_name"];
    $email        = $_POST["email"];
    $password     = $_POST["password"];
	$phone_number = $_POST["phone_number"];
	try{
		$inssql =" INSERT INTO users (first_name,last_name,email,password,phone_number)".
"VALUES('$first_name','$last_name', '$email','$password', '$phone_number');";
		
		$pdo->exec($inssql);
		echo "<br>"."users created successfully";
		
	} catch(PDOException $d){
		die("ERROR: Could not able to execute $inssql. " . $d->getMessage());
	}
	

} else {
    $first_name   = "";
    $last_name    = "";
    $email        = "";
    $password     = "";
    $phone_number = "";
}


	//Write Select Query here and get data from database
	$sql= "SELECT * FROM users";
	if($result = $pdo->query($sql)){
		if($result->rowCount() > 0){
				while($row = $result->fetch()){
					$user=$row['user_id'] ;
					$fname=$row['first_name'];
					$lname=$row['last_name'];
					$mail=$row['email'];
					$pass=$row['password'];
					$phonumber=$row['phone_number'];
					$creation=$row['created_at'];
					$upd=$row['updated_at'];
				}
				
			// Free result set
			unset($result);
		} else{
			echo "No records were found.";
		}
	} else{
		echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
	}
 
// Close connection
unset($pdo);


?>

<!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>Add User</h1>
	<form method="POST" action="">
		<label>First Name:</label>
		<input type="text" name="first_name" id="first_name">
		<br>

		<label>Last Name:</label>
		<input type="text" name="last_name" id="last_name">
		<br>

		<label>Email Address:</label>
		<input type="email" name="email" id="email">
		<br>

		<label>Password</label>
		<input type="password" name="password" id="password">
		<br>

		<label>Phone Number:</label>
		<input type="number" name="phone_number" id="phone_number">
		<input type="submit" name="submit"> 

		<br>
	</form>


	<div class="container">
	  <h2>Users List</h2>
	  <table class="table table-condensed">
	    <thead>
	      <tr>
	        <th>Firstname</th>
	        <th>Lastname</th>
	        <th>Email</th>
	        <th>Password</th>
	        <th>Phone Number</th>
	        <th>Created At</th>
	        <th>Updated At</th>
	      </tr>
	    </thead>
	    <tbody>
		<?php 
		
		echo "<tr>";
		echo "<td>" .$user."</td>";
		echo "<td>" .  $fname. "</td>";
		echo "<td>" . $lname . "</td>";
		echo "<td>" . $mail . "</td>";
		echo "<td>" . $pass . "</td>";
		echo "<td>" .$phonumber  . "</td>";
		echo "<td>" .$creation  . "</td>";
		echo "<td>" . $upd . "</td>";
	echo "</tr>";
	    /* <tr>
	        <td>John</td>
	        <td>Doe</td>
	        <td>john@example.com</td>
	        <td>123</td>
	        <td>202-555-0165</td>
	        <td>2019-10-18 12:33:00</td>
	        <td>2019-10-18 12:34:00</td>
		  </tr>*/
		  ?>
	    </tbody>
	  </table>
	</div>
</body>
</html>