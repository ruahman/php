<?php

// strings
$name = "bro";
echo "hello {$name}<br>";
echo var_dump($name) . "<br>";

// integers
$age = 20;
echo "age: {$age}<br>";
echo var_dump($age) . "<br>";

// floats
$pi = 3.14;

echo "pi: {$pi}<br>";

// booleans
$forSale = true;

echo "for sale: {$forSale}<br>";
echo var_dump($forSale) . "<br>";


// global scope
$gx = 5; // global scope variable can only be accessed outside of a function

function myTest()
{
    // this function does not have access to global scope variables
    echo isset($gx) ? "gx is set" : "gx is not set";
}

myTest();

// local scope
function myLocalTest()
{
    $lx = 5; // local scope
    echo "<p>Variable x inside function is: $lx</p>";
}
myLocalTest();

// lx is not accessed globally
echo isset($lx) ? "lx is set" : "lx is not set";


// global keyword
$ga = 5;
$gb = 10;

echo "<br>";
function myGlobalTest()
{
    global $ga, $gb;
    $gb = $ga + $gb;
    echo $gb . "<br>";
}

myGlobalTest();


// global array
$gx = 5;
$gy = 10;

function myGlobalArrayTest()
{
    echo "<br>" . $GLOBALS['gx'] + $GLOBALS['gy'] . "<br>";
}

echo "foobar";

myGlobalArrayTest();


// static scope

function myStaticTest()
{
    // value remains the same after function call
    static $sx = 0;
    echo $sx . "<br>";
    $sx++;
}

myStaticTest();
myStaticTest();
myStaticTest();
