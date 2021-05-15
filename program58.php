<center><h2>program to check whether year is leap year or not using conditional operator.</h2></center>

<?php

$year=2020;

$leap=($year % 400 == 0)? true: ($year% 4 == 0)? ($year% 100 != 0): false ? true : false;

if ($leap)
{
	echo" $year is leap year";
}
else
{
	echo " $year is not leap year";
}



?>