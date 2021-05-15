<center><h2>program to insert an element in an array</h2></center>
<?php


  
$num = array( '1', '2', '3', '4', '5' ); 
  
$ins = '11'; 
  
  
$position = 2; 
  
  
array_splice( $num, $position, 0, $ins);  
  
echo "After inserting $ins in the array is : "; 
foreach ($num as $value)  
{ 
echo "$value "; 
} 
?> 

