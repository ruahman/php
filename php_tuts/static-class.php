<?php

class Team
{
    protected $name;

    protected $members = [];

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function create(...$params)
    {
        return new static(...$params);
    }
}

$acme = Team::create(
    'Acme',
    [
        'John Doe',
        'Jane Doe'
    ]
);

var_dump($acme);
