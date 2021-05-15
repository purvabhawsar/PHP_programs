<center><h2>the sum of even numbers from 10 to 20</h2></center>
<?php
$num=10;
$total=0;

while ($num<20)
 {
	if ($num%2==0)
	 {
		$total=$total+$num;

	}
	$num++;
}
echo "<center><h3>$total</h3></center>";



?>