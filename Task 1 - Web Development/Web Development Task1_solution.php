<?php
function showVariableDataType() {
	$x = 3; $y = "hello"; $z = 5.67; $a = array(1,2); 
   echo'$'.'x is '.gettype($x);
   echo "<br>";
   echo'$'.'y is '.gettype($y);
   echo "<br>";
   echo'$'.'z is '.gettype($z);
   echo "<br>";
   echo'$'.'a is an '.gettype($a);
   
	/*
      Sample Output 
      $x is integer
      $y is string
      $z is Floating Point
      $a is an array */ 
}


function changeDataType() {
	//For changing Datatype of variable code should be in this function
    
    settype($x,'float');
    echo gettype($x); 
    echo "<br>";

    settype($y,'null');
    echo gettype($y);
    echo "<br>";

    settype($z,'int');
    echo gettype($z);
    echo "<br>";

    settype($a,'bool');
    echo gettype($a);
}

function typeCastVariables() {
    //For casting Variables code should be in this function
   
    $z = 5.67;
    $cast_int=(int)$z;
    echo $cast_int."<br>";
    
    $y = "hello";
    $cast_boo=(bool)$y;
    echo $cast_boo;
    
}
echo showVariableDataType()."<br>",changeDataType()."<br>",typeCastVariables();
?>