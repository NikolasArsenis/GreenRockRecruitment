<?php
/* Q.1 Write program to show desired output as following */

function conditionalOperators() {
	$a = 42;          $b = 0;
	if( $a && $b ) {            
		echo "TEST1 : Both a and b are true<br/>";
	}
	else {             
		echo "TEST1 : Either a or b is false<br/>";
	} 

	// your code is here
}
/* Use all conditional operators between $a and $b to display following Output. 
TEST1 : Either a or b is false 
TEST2 : Either a or b is false 
TEST3 : Either a or b is true 
TEST4 : Either a or b is true 
TEST5 : a is true  
TEST6 : b is true  
TEST7 : a is false 
TEST8 : b is false */

function numberInSingleLine () {
// your code is here
  $x = 0;$y = 1;$z = 2;$a = 3;
}

function iterateVariables () {

   for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
	// your code is here
   }
}

?>