<h1>PHP Arrays Functions</h1>
<?php
	/*This function accepts a paramter which needs to Output following
		Total Items in array : 10
		Maximum element in array : 100
		Minimum element in array: 1
		Sorted Array ( Ascending Order )
		Sorted Array ( Descending Order )
		Sum Of Array : 
		String : 1 * 23 * 43 * 54 * 51 * 65 * 73 * 82 * 91 * 100

	*/
	function performArrayFunctions($arr) {
		echo "Total Items in array :".count($arr)."<br>";
		echo "Maximum element in array :".max($arr)."<br>";
		echo "Minimum element in array:".min($arr)."<br>";
		echo "Sorted Array(".sort($arr).implode(",",$arr).')'."<br>";
		echo "Sorted Array(".rsort($arr).implode(",",$arr).')'."<br>";
		echo "Sum Of Array:".array_sum($arr)."<br>" ; 
		echo join("*",$arr);
		$SortedLength=count($arr);
		for ($i=0; $i <$SortedLength ; $i++) { 	
			return $arr[$i];	
		}
	}
	$arr = [1,23,43,54,51,65,73,82,91,100]; // global scope
	
	performArrayFunctions($arr); // outputs as described in the doc
?>
<hr>
<h1>PHP String Functions</h1>
<?php
	/*This function accepts a paramter which needs to Output following
		Extracted String = 
		String Length =
		Upper Case String =
		Lower Case String = 
		First Letter Uppercase of Sentence =
		First Letter Uppercase of each word = 
	*/
	
	function performStringFunctions ($str) {
		echo"Extracted String =".substr($str,20,46)."<br>";
		echo"String Length =".strlen($str)."<br>";
		echo"Upper Case String =".strtoupper($str)."<br>";
		echo"Lower Case String =".strtolower($str)."<br>";
		echo"First Letter Uppercase of Sentence =".ucfirst(strtolower($str))."<br>";
		echo"First Letter Uppercase of each word ".ucwords($str)."<br>";
		echo "Replaced String =".substr_replace($str,"cat",41);

	}
	$str = "The quick brown fox jumped over the lazy dog";
	performStringFunctions($str);
?>
<hr>
<?php
	echo ($_GET["firstPageVar2"]);	
?>
<a href='WebTask9.php?firstPageVar="I am variable passed from First Page"'>Second Page</a>
<hr>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>First Page</title>
</head>
<body>
	<form action="WebTask9.php" method="post" >
	<label for="inputfirstName">First Name</label>
	<input type="text" name="name" id="inputName" required><br>
	<label for="inputLastName">Last Name</label>
	<input type="text" name="lastname" id="inputlastName" required><br>
	<label for="inputEmail">Email Address</label>
	<input type="text" name="email" id="inputEmail" required ><br>
	<label for="inputPhone">Phone Number</label>
	<input type="tel" name="phone" id="inputPhone" required><br>
	<input type="submit" value="Submit">
	</form>
</body>
</html>
<hr>
