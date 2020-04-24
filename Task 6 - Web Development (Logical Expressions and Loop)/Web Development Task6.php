<h1>Find Tallest Candles To Blow</h1>
<?php
	/*This function accepts an array and it should find the maximum of the array 
	and return its total Count*/
	function findCandles($Arr) {
		$ar = array(1, 2, 3, 4,4);
		//$count= count($ar);
		$maxar= max($ar);
		$c = count($ar);
$Arr = 0;
$count = 0;
for($i=0;$i<$c;$i++){
 if($Arr<$ar[$i]){
  $Arr = $ar[$i];
  
 }
}
for($j=0;$j<$c;$j++){
 if($Arr == $ar[$j]){
  $count+=1;
 }
}
return $count;
	}
	
	$ar = [1, 2, 3, 4,4];
	echo "Candles Count: " . findCandles($ar);
?>
<hr>
h1>Convert 12 Hour Format Time String to 24 Hour Format String</h1>
<?php
	function convertTimeFormat($time12Hour) {
		$time24Hour = "";
		$Split = explode(":",$time12Hour);
		$Hour = $Split[0];					//$Hour=06 string   $Split=//Array ( [0] => 06 [1] => 40 [2] => 03 )
		$Split[2] = substr($Split[2],0,2);		//03 string
		
			

		if($Hour == '12' && strpos($time12Hour,"AM")!== FALSE) {
			return $time12Hour;

		} elseif(strpos($time12Hour,"PM")!== FALSE && $Hour != "12") {
			$time24Hour = strtotime($time12Hour); 
echo date('H:i:s', $time24Hour); 
		}
		return  $time24Hour;
	}
	
	$time12Hour = "06:40:03PM";
	$result = convertTimeFormat($time12Hour);
?>
<hr>
<hr> 