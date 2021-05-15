<center><h2>program to check whether a number is even or odd using conditional operator.</h2></center>

<?php

$x=7;

$num = $x % 2 == 0 ? 1 : 0;

if ($num) 
{
	echo "$x is even number";
}
else
{
	echo "$x is odd number";
}

?>