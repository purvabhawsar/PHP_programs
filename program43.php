<center><h2>program to count total number of even and odd elements in an array.</h2></center>
<?php


$num = array(23,12,11,9,6,7,4,5,3);
$n=count($num);

$even = 0;        
$odd = 0;            


for( $i = 0 ; $i < $n; $i++)
{
	
	if ($num[$i] & 1 == 1)
	{
		$odd ++ ;    
	}
	else {              
		$even ++ ;
	}        
}

echo "Number of even elements = $even<br>
and Number of odd elements = $odd" ;    




?>