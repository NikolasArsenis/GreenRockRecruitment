<h1>Local and Global Scope</h1>
<?php
	$number = 10; // global scope
	
	echo $number; // outputs 10

	/*This function accepts a paramter which needs to multiplied with a global variable*/
	function multiply ($multiplyBy) {
		echo $number; // $number is undefined here
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
	}
	
	test(); // 0
	test(); // 5
	test(); // 10
?>
<hr>
<hr>