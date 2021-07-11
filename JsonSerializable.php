<?php

class Person implements JsonSerializable
{
    private $name;

    private $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function jsonSerialize()
    {
        return [
            'name' => $this->name,
            'age' => $this->age
        ];
    }
}

// serialize object to json
$alice = new Person('Alice', 20);

header('Content-type:application/json');

echo json_encode($alice);