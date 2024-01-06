<?php

namespace abtract_student;


abstract class Person
{
    protected int $id;
    protected string $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
}



?>