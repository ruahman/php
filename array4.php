<?php

$permissions = [
    'edit',
    'delete',
    'view'
];

array_unshift($permissions, 'new');

var_dump($permissions);
print_r($permissions);

$numbers = [1, 2, 3];

array_push($numbers, 4, 5);

var_dump($numbers);

$last_number = array_pop($numbers);

echo $last_number; // 3

$first_number = array_shift($numbers);

echo $first_number;