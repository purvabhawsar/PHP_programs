<center><h2>program to count total number of negative elements in an array</h2></center>

<?php

$num=array(32,45,23,-43,-87,-90);
$n=count($num);
$neg=0;

foreach ($num as  $value)
{
	if ($value<=0)
	{
		$neg++;
		echo" $neg . $value <br>";
	}

}

?>