<center><h2>program to generate multiplication table</h2></center>
<?php
$num=0;
$val=3;


while ( $num< 10) 
{
	$num++;
	$table=$num * $val;
	echo "<center><h3>$val * $num = $table<br></h3></center>";
}
?>