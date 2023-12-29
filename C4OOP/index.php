<?php


class Person
{
    public string $name;
    public int $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getInfo()
    {
        return "Name is: $this->name and Age is: $this->age" . PHP_EOL;
    }
}






?>