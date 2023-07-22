<?php

$food = array('Pasta', 'Pizza', 'Salad');
array_push($food, 'Fruit', 'Bread');

echo count($food) . "<br>";
echo var_dump($food) . "<br>";

// pop off last item
array_pop($food);

// remove first item
array_shift($food);


foreach ($food as $item) {
    echo $item . "<br>";
}

$capitals = array("France" => "Paris", "Germany" => "Berlin", "USA" => "Washington DC");
echo var_dump($capitals) . "<br>";


foreach ($capitals as $key => $value) {
    echo "The capital of $key is $value <br>";
}

$keys = array_keys($capitals);
foreach ($keys as $key) {
    echo $key . "<br>";
}

$values = array_values($capitals);
foreach ($values as $value) {
    echo $value . "<br>";
}
