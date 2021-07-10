<?php

$balance = 100;
var_dump($balance);

$balance = 100;
$message = 'Insufficient balance';

echo '<pre>';
var_dump($balance);
echo '</pre>';

echo '<pre>';
var_dump($message);
echo '</pre>';

die();

echo 'After calling the die function';