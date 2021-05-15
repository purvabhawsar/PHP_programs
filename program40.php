<center><h2>sum of all array elements</h2></center>
<?php
$num = array(34,45,12,23,49);
$total=0;

for ($i = 0; $i < count($num); $i++) 
{   
   $total = $total + $num[$i];  
}    

echo "<center>sum of array is $total</center>";

?>