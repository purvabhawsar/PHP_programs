<center><h2>program to put even and odd elements of array in two separate array</h2></center>

<?php

$input = array(4, 3, 6, 5, 8, 7, 2);
  

function oddCmp($input)
{
    return ($input & 1);
}
function evenCmp($input)
{
    return !($input & 1);
}
$odd = array_filter($input, "oddCmp");
  
$even = array_filter($input, "evenCmp");
 
$odd = array_values(array_filter($odd));
  
$even = array_values(array_filter($even));
  
print"Odd array :";
print_r($odd);
  
print"Even array :";
print_r($even);
  
?>