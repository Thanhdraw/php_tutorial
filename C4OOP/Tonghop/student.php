<?php

namespace Student;

use abtract_student\Person;

use inter_Student\registrable;

class Student extends Person implements registrable
{
    private $couse = [];

    public function __construct($id, $name)
    {
        parent::__construct($id, $name);
    }

    public function register()
    {
        echo "{$this->name} (ID: {$this->id}) has registered for the course.<br>";
    }

    public function unregister()
    {
        echo "{$this->name} (ID: {$this->name}) has unregistered for the course.<br>";
    }
    public function __toString()
    {
        return "Student ID: {$this->id}, Name: {$this->name}";
    }

    public function getCourse()
    {
        return $this->couse;
    }
}
?>