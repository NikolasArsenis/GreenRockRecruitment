<h1>Reverse Array</h1>
<?php
	function reverseArray($Arr) {	
	/*global $fruits;
	$reverse=array_reverse($fruits,true);
	echo implode("",$reverse);*/
	$fruits= array('fruits' => "Mango", "Strawberry","Bananas","Pineapple");
	$reverse=array_reverse($fruits,true);
	echo implode("",$reverse);
	}
	$fruits = ["Mango","Strawberry","Bananas","Pineapple"];
	$result = reverseArray($fruits);
	
?>
<hr>
<h1>Find Max Number in Array</h1>
<?php
	function findMaxOfArray($Arr) {
		global $numbers;
		echo max($numbers);
		}
	$numbers = [23,41,633,14,54,11,66,0];
	//$result = reverseArray($numbers); Probably i had to change the original result provided because it was printing result from the top function.
	$result= findMaxOfArray($numbers);

?>
<hr>
<hr>
<h1>Find and Return List of Even and Odd Numbers</h1>
<?php
	/*@return Array in this format: array(
		"even" => [2,4,6,8,10,12,14]
		"odd"  => [1,3,5,7,9,11,13]
	) */
	function getEvenAndOddNumbers($Arr) {
		$numbers = array( 1,2,3,4,5,6,7,8,9,10,11,12,13,14 );
		function oddNumbers($numbers){
			return ($numbers & 1);
		}
		function evenNumbers($numbers){
			return !($numbers & 1);		
		}
	$odd=array_filter($numbers,"oddNumbers");
	$even=array_filter($numbers,"evenNumbers");
	$odd=array_values(array_filter($odd));
	$even=array_values(array_filter($even));
	
	
	echo "array(<br>".'"even"=>'.implode(",",$even)."<br>";
	echo '"odd"=>'.implode(",",$odd);
	
	}
	$numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];
	$result = getEvenAndOddNumbers($numbers);
?>
<hr>