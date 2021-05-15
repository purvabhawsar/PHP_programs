<center><h2>program to find maximum between three numbers using conditional operator.</h2></center>
<?php
$a=67;
$b=45;
$c=92;


$max = $a > $b ? ( $a > $c ? $a : $c) : ($b > $c ? $b : $c) ;
 
// Print the largest number
echo "Largest number between " .
     $a. " and " .$b . " and ".$c." is " . $max;
 
?>