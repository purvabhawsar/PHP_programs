<center><h2>year is LEAP year or not</h2></center>
<?php
$year=2020;

if ($year%4===0)
{
	if ($year%100===0)
	{
		if ($year%400===0)
		{
			echo "<h3>$year is leap year</h3>";
		}
		else
		{
			echo "<h3>$year is not leap year</h3>";
		}
	}
	else{
		echo "<h3>$year is leap year</h3>";
	}
}
else
{
	echo "<h3>$year is not leap year</h3>";
}
?>