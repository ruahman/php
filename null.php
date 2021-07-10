<?php

$x = "Hello world!";
$x = null;
var_dump($x);

$email = 'webmaster@phptutorial.net';
//unset($email);

var_dump($email); // NULL

$email = null;
var_dump(is_null($email)); // bool(true)

$email = null;
$result = ($email === null);
var_dump($result); // bool(true)

$home= 'phptutorial.net';
$result = ($home === null);
var_dump($result); // bool(false)

