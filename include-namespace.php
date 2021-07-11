<?php

require_once "create-namespace.php";


use Html\Table as Table;
use Html\Row as Row;

//$table = new Html\Table();
$table = new Table();

$table->title = "My table";
$table->numRows = 5;

//$row = new Html\Row();
$row = new Row();

$row->numCells = 3;

echo $table->message();
echo $row->message();



//$customer = new Customer('Bob');
//$customer = new Store\Model\Customer('Bob');

//use Store\Model;
//$customer = new Model\Customer('Bob');

//use Store\Model\Customer;
//$customer = new Customer('Bob');

use Store\Model\{Customer, Product};
$customer = new Customer('Bob');
$product = new Product();

echo $customer->getName();

//use Store\Utils;
//use Store\Database;
//
//$loggers = [
//    new Utils\Logger(),
//    new Database\Logger()
//];

use Store\Utils\Logger;
use Store\Database\Logger as DatabaseLogger;


$loggers = [
    new Logger(),
    new DatabaseLogger()
];



