<center><h2>program to get factorial of given number</h2></center>

<?php
$num = 4;  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "<center><h3>Factorial of $num is $factorial</h3></center>";
?>