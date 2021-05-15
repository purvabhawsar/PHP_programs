<center><h2>program to count frequency of each element in an array</h2></center>
<?php  

$arr = array(1, 2, 8, 3, 2, 2, 2, 5, 1);   


$fr = array_fill(0, count($arr), 0);  
$visited = -1;  

for($i = 0; $i < count($arr); $i++){  
	$count = 1;  
	for($j = $i+1; $j < count($arr); $j++){  
		if($arr[$i] == $arr[$j]){  
			$count++;  
			
			$fr[$j] = $visited;  
		}  
	}  
	if($fr[$i] != $visited)  
		$fr[$i] = $count;  
}  

print("-------------------------<br>");  
print(" Element | Frequency<br>");  
print("-------------------------<br>");  
for($i = 0; $i < count($fr); $i++){  
	if($fr[$i] != $visited){  
		
		print(str_repeat(' ', 6) . $arr[$i] );  
		print(str_repeat(' ', 7) . "|" . str_repeat(' ', 7) . $fr[$i]);  
		print("<br>");  
	}  
}  

?>