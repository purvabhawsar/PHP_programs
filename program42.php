<center><h2>second largest element in an array</h2></center>
<?php 
$array = array('200', '15','69','122','50','201');
$max_1 = $max_2 = 0;

for ($i=0; $i<count($array); $i++) {
	if ($array[$i] > $max_1) {
		$max_2 = $max_1;
		$max_1 = $array[$i];
	} else if ($array[$i] > $max_2 && $array[$i] != $array)
	{
		$max_2 = $array[$i];
	}
}
echo "Max=".$max_1;
echo "<br />"; 
echo "Smax 2nd largest=".$max_2;
