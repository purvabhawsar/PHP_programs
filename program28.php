<center><h2>program to check given number is Armstrong number or not</h2></center>

<?php  
$num=407;  
$total=0;  
$x=$num;  
while($x!=0)  
{  
$rem = $x % 10;  
$total= $total + $rem * $rem * $rem;  
$x= $x/10;  
}  
if($num==$total)  
{  
echo "<center><h3>$num is an Armstrong number</h3></center>";  
}  
else  
{  
echo "<center><h3>$num is not an armstrong number</h3></center>";  
}  
?>  
