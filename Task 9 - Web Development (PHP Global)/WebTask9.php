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
		//echo $arr;
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
		
	}
	$str = "The quick brown fox jumped over the lazy dog";
	performStringFunctions($str);
?>
<hr>
<?php
if (isset($_GET["firstPageVar"])) {
	echo $_GET["firstPageVar"];
} 
?>
<a href='WebTask8.php?firstPageVar2="I am variable passed from Second Page"'>First Page</a>
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
	<?php
	if (isset($_POST["name"],$_POST["lastname"],$_POST["email"],$_POST["phone"])){
		echo $_POST["name"]."<br>";
	echo $_POST["lastname"]."<br>";
	echo $_POST["email"]."<br>";
	echo $_POST["phone"]."<br>";
	}
	else{"";} 
	?>
</body>
</html>
<hr>
