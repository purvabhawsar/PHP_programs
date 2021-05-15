<center><h2>program to merge two array to third array.</h2></center>
<?php

$arr1 = array(1, 3, 5, 7, 9, 11);
$n1 = count($arr1);

$arr2 = array(2,9,6,8);
$n2 = count($arr2);


$i = 0;
$j = 0;
$k = 0;
$arr3 = array();

while ($i < $n1 && $j < $n2)
{
    $arr3[$k++] = $arr1[$i++];
    $arr3[$k++] = $arr2[$j++];
}


while ($i < $n1)
{
    $arr3[$k++] = $arr1[$i++];
}


while($j < $n2){
    $arr3[$k++] = $arr2[$j++];
}

echo "Array after merging"." ";
for ($i = 0; $i < ($n1 + $n2); $i++)
{
    echo $arr3[$i] ." ";
}






?>