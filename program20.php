<center><h2>sum of odd numbers from 1 to 10</h2></center>
<?php
$total = 0;
$number = 0;
 
while ($number <= 10)
{
    if ($number % 2 == 1)
    {
        $total = $total + $number;
    }
    $number++;
}
 
echo "<center><h3>$total</h3></center>";
 
?>
 








