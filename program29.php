<center><h2>program to check given number is prime number or not</h2></center>
<?php


$num = 7;
$count=0;
for ( $i=1; $i<=$num; $i++)
{
if (($num%$i)==0)
{
$count++;
}
}
if ($count<3)
{
echo "<center><h3>$num is a prime number</h3></center>";
}
else
{
echo "<center><h3>$num is not a prime number</h3></center>";
}
?>
