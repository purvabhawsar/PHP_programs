<center><h2>program to check given string is palindrome number or not</h2></center>

<?php   

$word = "kanak";

$reverse = strrev($word);  


if($word == $reverse)
{  
	echo "<center><h3>The word $word is Palindrome</h3></center>";     
}
else
{  
	echo "<center><h3>The word $word is not a Palindrome</center></h3>";   
}  

?>  
