<center><h2>Sum of digit of n numbers</h2></center>
<?php  
$num = 14597;  
$sum=0; $rem=0;  
  for ($i =0; $i<=strlen($num);$i++)  
 {  
  $rem=$num%10;  
   $sum = $sum + $rem;  
   $num=$num/10;  
 }  
 echo "<center><h3>Sum of digits is $sum</h3></center>";  
 ?>  
