<center><h2>Program to reverse any number</h2></center>

<?php

$num = 23456;  
$rev_num = 0;  
while ($num > 1)  
{  
$rem = $num % 10;  
$rev_num = ($rev_num * 10) + $rem;  
$num = ($num / 10);   
}  
echo "<center><h3>Reverse number of 23456 is $rev_num</h3></center>";  
?>  

