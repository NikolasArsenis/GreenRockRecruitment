<!DOCTYPE html>
<html>
<head>
	<title>Submission Form</title>
	<style>
	p{
		color: red;
	}</style>
</head>
<body>
	<?php 
	// write code to perform form submission and display validation errors
	$firstname=$lastname=$email=$password=$phoneNumber="";
	$firstnameError=$lastnameError=$emailError=$passError=$phoneError="";
	if(isset($_POST['Submit'])){							//$_SERVER["REQUEST_METHOD"]==="POST"
		//validation function
		function validate($str){
			return trim(stripslashes(htmlspecialchars($str)));
		}
	if(empty($_POST['first_name'])){
		$firstnameError='Please fill up the first name field';
	}else{
		$firstname=validate($_POST['first_name']);
		if(strlen($firstname)>8){
			$firstnameError="Your First Name input is greater than 8 characters";
		}
	}
	if(empty($_POST['last_name'])){
		$lastnameError='Please fill up the Last name field';
	}else{
		$lastname=validate($_POST['last_name']);
		if(strlen($lastname)>8){
			$lastnameError="Your Last Name Input is greater than 8 characters";
		}
	}
	if(empty($_POST['email'])){
		$emailError="Please fill up the email field";
	}else{
		$email=validate($_POST['email']);
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$emailError="Please enter a valid email";
		}
	}
	if(empty($_POST['password'])){
		$passError="Please fill up the password field";
	}else{
		$password=validate($_POST['password']);
		if(!preg_match('/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?=.*[A-Z])(?=.*[a-z]).*$/',$password)){
			$passError="Password must contain One Capital, at least 8 Characters and at least one special character";
		}
	}
	if(empty($_POST['phone_number'])){
		$phoneError="Please fill up the password field";
	}else{
		$phoneNumber=validate($_POST['phone_number']);
		if(!preg_match('/^\d{3}[\-]\d{3}[\-]\d{4}+$/',$phoneNumber)){
			$phoneError="Phone number must be a US Number Pattern";
		}
	}
	if(isset($firstname,$lastname,$email,$password,$phoneNumber)){
		echo "First Name :$firstname <br>
	Last Name :$lastname <br>
	Email :$email <br>
	Password :$password <br>
	Phone Number:$phoneNumber <br>";
	}
	if (isset($firstnameError,$lastnameError,$emailError,$passError,$phoneError)) {
		echo "<p>$firstnameError</p><br>
		<p>$lastnameError<p>
		<p>$emailError<p>
		<p>$passError<p>
		<p>$phoneError<p>";
	}
	
	
	
/*if(empty($firstnameError)&& empty($lastnameError)&& empty($emailError)&& empty($passError)&& empty($phoneError))	{
	echo "First Name :$firstname <br>
	Last Name :$lastname <br>
	Email :$email <br>
	Password :$password <br>
	Phone Number:$phoneNumber <br>";
}*/
die();
}
	?>
	
	
</body>
</html>