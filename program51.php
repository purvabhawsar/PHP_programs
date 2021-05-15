<center><h2>program to delete all duplicate elements from an array</h2></center>
<?php
$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($input);
print_r($result);
?>