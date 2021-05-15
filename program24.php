<center><h2>program to check given number is palindrome number or not</h2></center>
<?php   

$num = 121;

$reverse = strrev($num);  


if($num == $reverse)
{  
	echo "<center><h3>The number $num is Palindrome</h3></center>";     
}
else
{  
	echo "<center><h3>The number $num is not a Palindrome</center></h3>";   
}  

?>  
