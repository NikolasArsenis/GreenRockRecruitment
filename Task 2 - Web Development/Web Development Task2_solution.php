<?php
/* Q.1 Write program to show desired output as following */

function conditionalOperators() {
	$a = 42;          $b = 0;
	if( $a && $b ) {            
		echo "TEST1 : Both a and b are true<br/>";       //TEST1 : Either a or b is false 
	}
	else {             
		echo "TEST1 : Either a or b is false<br/>";
	} 
	// your code is here
if($a and$b){
	echo "TEST2 : Both a and b are true<br/>";			//TEST2 : Either a or b is false
}
else {             
	echo "TEST2 : Either a or b is false<br/>";
} 
if($a or$b){
	echo "TEST3 : Both a and b are true<br/>";			//TEST3 : Either a or b is true
}
else {             
	echo "TEST3 : Either a or b is false<br/>";
} 
if($a ||$b){
	echo "TEST4 : Both a and b are true<br/>";			//TEST4 : Either a or b is true
}
else {             
	echo "TEST4 : Either a or b is false<br/>";
} 
if($a !== $b){
	echo "TEST5 :  a is true<br/>";						//TEST5 : a is true
}
else {             
	echo "TEST5 :  b is false<br/>";
} 
if($a <> $b){
	echo "TEST6 :  b is true<br/>";						//TEST6 : b is true
}
else {             
	echo "TEST6 :  a is false<br/>";
} 
if($a === $b){
	echo "TEST7 :  a is true<br/>";						//EST7 : a is false 
}
else {             
	echo "TEST7 :  b is false<br/>";
} 
if($a <= $b){
	echo "TEST8 :  a is true<br/>";						//TEST8 : b is false
}
else {             
	echo "TEST8 :  b is false<br/>";
} 
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
		
  array($x,$y,$z,$a);
foreach (range($x, $a) as $number)
		{echo $number;}
		print "<br>";
	}

function iterateVariables () {

   for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
	// your code is here
	switch ($x) {
		case 3:
			# code...
			$x++;
			echo "The number is:  <br>";
			break;
		case 5:
			# code...
			$x++;
			echo "The number is:  <br>";
			break;
		case 8:
			# code...
			exit("End of the loop !");
	}
	
   }   
}
conditionalOperators();
numberInSingleLine();
iterateVariables();
?>
