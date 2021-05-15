<center><h2>program to check given number is perfect number or not</h2></center>

<?php
$num = 6;
$i = 1;
$total = 0;

for($i=1; $i<$num; $i++)
{
 if ($num % $i == 0)
  $total += $i;
}

if($total == $num)
 echo "<center><h3>$num is a perfect number</h3></center>";
else
 echo "<center><h3>$num is not a perfect number</h3></center>";
?>