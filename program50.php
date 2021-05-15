<center><h2>program to count total number of duplicate elements in an array</h2></center>
<?php
$arraychars=array(33,33,55,45,89);

$arrlength=count($arraychars);

$arrCount=array();

for($i=0;$i<$arrlength-1;$i++){
	$key=$arraychars[$i];
	if(@$arrCount[$key]>=1){
		
		$arrCount[$key]++;
	} else{
		$arrCount[$key]=1;
	}
	

}
echo "<pre>";
print_r($arrCount);





?>