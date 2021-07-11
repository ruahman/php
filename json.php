<?php
//$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
//
//echo json_encode($age);
//?>

<?php

//$names = ['Alice', 'Bob', 'John'];
//$json_data = json_encode($names);

$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
$json_data = json_encode($age);

// return JSON to the browsers
header('Content-type:application/json');
echo $json_data;
