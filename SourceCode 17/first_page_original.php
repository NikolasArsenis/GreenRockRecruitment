<?php 
	//Write Select Query here and get data from database
	$SQL = "";


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
	<form method="POST" action="second_page.php">
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
	      <tr>
	        <td>John</td>
	        <td>Doe</td>
	        <td>john@example.com</td>
	        <td>123</td>
	        <td>202-555-0165</td>
	        <td>2019-10-18 12:33:00</td>
	        <td>2019-10-18 12:34:00</td>
	      </tr>
	    </tbody>
	  </table>
	</div>
</body>
</html>