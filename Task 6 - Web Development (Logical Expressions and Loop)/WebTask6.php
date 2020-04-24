<h1>Find Tallest Candles To Blow</h1>
<?php
	/*This function accepts an array and it should find the maximum of the array 
	and return its total Count*/
	function findCandles($Arr) {
		
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
		$Hour = $Split[0];
		$Split[2] = substr($Split[2],0,2);
		
		if($Hour == '12' && strpos($time12Hour,"AM")!== FALSE) {
			
		} elseif(strpos($time12Hour,"PM")!== FALSE && $Hour != "12") {
			
		}
		return  $time24Hour;
	}
	$time12Hour = "06:40:03PM";
	$result = convertTimeFormat($time12Hour);
?>
<hr>
<hr>