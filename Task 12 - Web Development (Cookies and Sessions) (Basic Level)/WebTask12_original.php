<h1>Set Cookies</h1>
<?php 
/*Following are three variables used to create cookies. Please write a code that should set cookie in the browser under localhost domain*/

$name = "test";
$value = "35";
$expire = time() + (60*60*24*7); // add seconds

function generateCookies($name,$value,$expire) {

}

/*Complete this function, when called the cookie should automatically be deleted from $_COOKIE*/
function unsetCookies($name,$value,$expire) {

}

?>
<br>
<h1>Get Cookies</h1>
<?php 
	print_r($_COOKIE);
	// Write simple lines of code to check if particular Cookie name exist then echo that value other wise echo blank

	/*Write function enlist all cookies being set through this web page*/
	function listCookies() {

	}

?>