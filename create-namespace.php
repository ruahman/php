<?php

namespace Html;

class Table {
    public $title = "";
    public $numRows = 0;
    public function message() {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}

class Row {
    public $numCells = 0;
    public function message() {
        echo "<p>The row has {$this->numCells} cells.</p>";
    }
}

namespace Store\Model;

class Customer
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Product
{
}


namespace Store\Database;

class Logger
{
    public function log($message)
    {
        var_dump('Log ' . $message . ' to the database.');
    }
}

namespace Store\Utils;

class Logger
{
    public function log($message)
    {
        var_dump('Log ' . $message);
    }
}

// global namespace
namespace App;

$publish_at = new \DateTime();

echo $publish_at->format('Y-m-d H:i:s');



