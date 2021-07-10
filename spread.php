<?php

$numbers = [4,5];
$scores = [1,2,3, ...$numbers];

print_r($scores);

function even_number(): Generator
{
    for($i =2; $i < 10; $i+=2){
        yield $i;
    }
}

$even = [...even_number()];

var_dump($even);
