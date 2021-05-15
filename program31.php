<center><h2>program to print Fibonacci number of given range</h2></center>

<?php


$n=12;
$num1 = 0;
$num2 = 1;

$counter = 0;
while ($counter < $n){
	echo '<br> '.$num1;
	$num3 = $num2 + $num1;
	$num1 = $num2;
	$num2 = $num3;
	$counter = $counter + 1;
}


?>
