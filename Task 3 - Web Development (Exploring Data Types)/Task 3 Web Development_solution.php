<h1>Factorial</h1>
<?php
	function getfactorial($x) {
	$fact=1;	
for($i=1; $i<=$x; $i++)
{$fact= $fact * $i;}
return "The factorial of $x is ".$fact;
	if(is_array($x)||is_string($x)||is_null($x)||is_float($x)||is_bool($x)){
	echo "Please provide correct data type";
	}
	
	/*switch ($x) {												//my first approach which i didnt manage to make it work.
		
			case "is null":
				is_null($x);
				echo "Please provide correct data type";
				break;
				case "is string":
					is_string($x);
					echo "Please provide correct data type";
					break;
					case "is array":
						is_array($x);
						echo "Please provide correct data type";
						break;
						 
		default :
		exit ("the factorial of 3 is".$x);}*/
}

echo getfactorial(3);

?>
<hr>
<?php /*Following HTML + PHP Code Generates Chess Board. Use Loops to create 
black and white chess boxes. Chess Board should contain 8 Rows and 8 Columns
*/   ?>
<h1>Chess Board</h1>
<table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
	<tr>
		<td height=35px width=30px bgcolor=#FFFFFF></td>
		<td height=35px width=30px bgcolor=#000000></td>
	</tr>
<?php 
function createChessBoard() {
	{  //Write Code here to create Chess Board Dynamically using Loops 
		for($row=1;$row<=8;$row++)  
{  echo "<tr>";  
	for($column=1;$column<=8;$column++)  
	{
		$total=$row+$column;
		if($total%2==0)
		{  
			echo "<td height=35px width=30px bgcolor=#FFFFFF></td>";  
		}  
		else  
		{  
			echo "<td height=35px width=30px bgcolor=#000000></td>";  
		}  
	}  
	echo "</tr>";  
}  
	}  
} 
createChessBoard();
?>  
</table>