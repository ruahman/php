<?php

$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);

echo json_encode($age);


$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

echo "<br>";
echo "<br>";

var_dump(json_decode($jsonobj));

echo "<br>";
echo "<br>";

var_dump(json_decode($jsonobj, true));
