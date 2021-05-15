<center><h2>Program to print all negative elements in an array</h2></center>
<?php

$num = array(16,56,45,23,-98,-32,56);
foreach ($num as $value)
 {
	if ($value<0)
	 {
		echo "<h3>Negative element in an array is $value</h3>";
	}
}

?>