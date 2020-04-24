<!DOCTYPE html>
<html>
<head>
    <title>User Submission Form via AJAX</title>
</head>
<body>
    <?php

// Recieve values from POST one by one
if (isset($_POST["first_name"]) && $_POST["last_name"] && $_POST["email"] && $_POST["password"] && $_POST["phone_number"]) {
    $first_name   = $_POST["first_name"];
    $last_name    = $_POST["last_name"];
    $email        = $_POST["email"];
    $password     = $_POST["password"];
    $phone_number = $_POST["phone_number"];
} else {
    $first_name   = "";
    $last_name    = "";
    $email        = "";
    $password     = "";
    $phone_number = "";
}

// write validations code if any of the validation fails the record should not be submitted into the database.
if(isset($_POST['submit'])){
    if(empty($first_name&&$last_name)){
        echo $errName="Fill the name and last name fields"."<br>";
    }else{
        $first_name=trim($first_name);
        $last_name=trim($last_name);
    }
    if(empty($email)){
     echo   $errEmail="please fill the email field"."<br>";
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo $errvarEmail="invalid email";
    }else{
        $email=trim($email);
    }
if(empty($password)){
    echo $errPass="password is required"."<br>";
}else {
    $password=trim($password);
}   

} 

$servername = "localhost";
$username   = "username";
$password   = "password";
$dbname     = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$first_name    = mysqli_real_escape_string($conn, $_POST['first_name']);
$last_name    = mysqli_real_escape_string($conn, $_POST['last_name']);
$email        = mysqli_real_escape_string($conn, $_POST['email']);
$password     = mysqli_real_escape_string($conn, $_POST['password']);
$phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
    //database creation
    $database_sql="CREATE DATABASE IF NOT EXISTS myDB";
   //database val
    if ($conn->query($database_sql) === FALSE){
        return true;
        }
        //user creation
$user_sql="CREATE USER IF NOT EXISTS 'username'@'localhost' IDENTIFIED BY 'username'
GRANT ALL ON `myDB`.* TO 'username'@'localhost' IDENTIFIED BY 'username';";
//user check
if ($conn->query($user_sql) === FALSE){
    echo "User doesnt exists: ".$conn->error;
    }
//table creation
        $table_sql="CREATE TABLE IF NOT EXISTS `users` (
            user_id int(11) NOT NULL,
            user_first varchar(256) NOT NULL,
            user_last varchar(256) NOT NULL,
            user_email varchar(256) NOT NULL,
            user_password varchar(256) NOT NULL,
            user_phone varchar(256) NOT NULL,
            updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
            created_at datetime NOT NULL,
            AUTO_INCREMENT to PRIMARY KEY (user_id) 
          )";
          //table val
          if ($conn->query($table_sql) === FALSE){
            echo "Table not created: ".$conn->error;
            }
//Write Insert Query here for User form
$sql = " INSERT INTO myDB.users (user_first,user_last,user_email,user_password,user_phone)".
"VALUES('$first_name','$last_name', '$email','$password', '$phone_number');";
    
/*$result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
                echo $row['user_id'];
                echo  $row['first_name'] ;
                echo  $row['last_name'];
                echo  $row['user_email'];
                echo  $row['user_password'];
                echo  $row['user_phone'];
           // Free result set
        mysqli_free_result($result);
        }  else{
        echo "No records matching your query were found.";
    }*/

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>   
</body>
</html>