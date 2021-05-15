<center><h2>program to find out power of number</h2></center>
<?php
$x=3;
$n=2;
$final_num = 1;
$n1 = $n;
while($n1 > 0){
	$final_num = $final_num * $x;
	$n1--;
}
echo "<center><h3>$x raised to the power $n = $final_num</h3></center> ";
?>