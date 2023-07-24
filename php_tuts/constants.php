<?php

// this is a function and can be called at runtime
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING . "<br>";


// this part of the language and can only be called at compile time
const GREETING2 = "new constant method";
echo GREETING2;


// this works
if (true) {
    define("GREETING3", "Welcome to W3Schools.com!");
}

// you can define const from expressions
define('PREFIX', 'OPTION');


define(PREFIX . '_1', 1);
define(PREFIX . '_2', 2);
define(PREFIX . '_3', 3);
