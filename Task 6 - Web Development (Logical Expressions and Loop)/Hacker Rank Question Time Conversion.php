<?php
/* Write your PHP code here */
$s = "06:40:03PM"; 
$t= $c = substr($s,0,2);
$a = (int)$t;
$sym = substr($s,8,2);

if($sym == "PM"){
 if($a <12){
  $c = $a+12;
  $p = str_replace($t,$c,$s);
  $x = str_replace("PM","",$p);    
  echo $x;
 }
 if($a == 12){
  $c = 12;
  $p = str_replace($t,$c,$s);
  $x = str_replace("PM","",$p);    
  echo $x;
 }
  
 
}
if($sym == "AM"){
 $c = $t;
    if($c == 12){
        $c = 00;
  $p = str_replace($t,"00",$s);
  $x = str_replace("AM","",$p);    
  echo $x;
    }
    $p = str_replace($t,$c,$s);
    $x = str_replace("AM","",$p);    
    echo $x;
}
?>
