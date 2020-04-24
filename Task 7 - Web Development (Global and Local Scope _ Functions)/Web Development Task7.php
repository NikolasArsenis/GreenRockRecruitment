<h1>Local and Global Scope</h1>
<?php
	$number = 10; // global scope
	
	echo $number; // outputs 10

	/*This function accepts a paramter which needs to multiplied with a global variable*/
	function multiply ($multiplyBy) {
		global $number;
		$num=14;
		$multiplyBy=($number*5);
		$output=($num*$multiplyBy);
	return $output;
	}
	
	echo "Number Output: " . multiply (5);
?>
<hr>
h1>Static Variables</h1>
<?php
	/* This function has a number variable. Use Static variable power so that
	variable value stays in memory */

	function printNumber () {
		$number = 0; // declare static variable
		static $number=1;
		echo $number*5;
		$number++;
		echo "<br>";

			}
	printNumber();
	printNumber();
	printNumber();
	
	/*test(); // 0
	test(); // 5			<= i didn't knew what to do with it so i comment it and called the function as otherwise would.
	test();*/ // 10						
	


?>
<hr>
<hr>