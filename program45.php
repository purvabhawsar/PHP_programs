<center><h2>program to copy all elements from an array to another array</h2></center>

<?php 

$arr1 = array(8, 2, 5, 4, 5);   


$arr2 = array();      

for ($i = 0; $i < count($arr1); $i++)
{   
	$arr2[$i] = $arr1[$i];   
}    


echo("Elements of original array: <br>");  
for ($i = 0; $i < count($arr1); $i++) {   
	echo("$arr1[$i]" . " ");  
}   
echo "<br>"; 

echo("Elements of new array: <br>");  
for ($i = 0; $i < count($arr2); $i++) {   
	echo($arr2[$i] . " ");  
}   
?>  

