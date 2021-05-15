<center><h2>PHP program to print pattern</h2></center>
<h2>pattern - 1</h2>
<?php

for ($i=1; $i<=5; $i++)  
{  
	for ($j=1; $j<=5; $j++)  
	{  
		echo '* ';  
	}  
	echo "</br>";  
}  

?>
<h2>Pattern  - 2</h2>

<?php


for ($i=1; $i<=5; $i++) 	       
{ 	 
	for ($k=5; $k>$i; $k--)	 
	{	  
		echo " ";	  
	}	
	for($j=1;$j<=$i;$j++)	  
	{	  	
		echo "*";	  
	}	  	
	echo "<br/>";	
} 


?>
<h2>Pattern - 3</h2>

<?php  
for($i=0;$i<=5;$i++)
{  
	for($j=5-$i;$j>=1;$j--)
	{  
		echo "* ";  
	}  
	echo "<br>";  
}  
?>

<h2>Pattern - 4</h2>

<?php  
for($i=5; $i>=1; $i--)  
{  
	if($i%2 != 0)  
	{  
		for($j=5; $j>=$i; $j--)  
		{  
			echo "* ";  
		}  
		echo "<br>";  
	}  
}  
for($i=2; $i<=5; $i++)  
{  
	if($i%2 != 0)  
	{  
		for($j=5; $j>=$i; $j--)  
		{  
			echo "* ";  
		}  
		echo "<br>";  
	}  
}  
?>

<h2>Pattern - 5</h2>

<?php  
for($i=1; $i<=5; $i++)
{   
	for($j=1; $j<=$i; $j++)
	{   
		echo ' * ';   
	}  
	echo '<br>';   
}  
for($i=5; $i>=1; $i--)
{   
	for($j=1; $j<=$i; $j++)
	{  
		echo ' * ';   
	}   
	echo '<br>';   
}   
?>