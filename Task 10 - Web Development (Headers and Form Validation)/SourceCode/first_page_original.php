<!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
</head>
<body>
	<h1>PHP Headers</h1>
	<?php 
		/* Complete this function using PHP headers such that it redirects to the page specified in the paramter*/
		function redirect_to($path) {
			global $path;
			echo $path;
			
			
		}

		$path = "second_page.php";
		redirect_to($path);	
		?>
		<hr>
		<h2>Validations Functions</h2>
		<?php 
			require_once('validation_functions.php');
			$errors = array();
			$username = trim("");

			if(!has_presense($username)) {
				$errors["username"] = "Username cannot be blank.";
			}
			$activity = "I went to Newyork";
			$max = 10;
			if(!has_max_length($activity,$max)) {
				$errors["activity"] = "Activity should not be greater than $max characters.";
			}

			if(!empty($errors)) {
				foreach($errors as $error) {
					echo $error . "<br>";
				}
			}

		?>
</body>
</html>