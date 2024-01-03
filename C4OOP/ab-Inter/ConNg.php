<?php


abstract class ConNg
{

    protected string $name;
    protected int $age;



    public function __construct($name, $age)
    {
        $this->age = $age;
        $this->name = $name;
    }

    abstract public function displayInfO();
}


class Students extends Person
{
    private int $grade;

    private string $major;

    public static $numberStudent = 0;
    public function displayInfo()
    {
        echo "Student Infomation: Name- $this->name", "Age-$this->age" . "<br>";
        echo "grade: $this->grade", "Major: $this->major";

    }

    public function __construct($name, $age, $grade, $major)
    {
        parent::__construct($name, $age);
        $this->grade = $grade;
        $this->major = $major;
    }

    public function __get($grade)
    {
        return $this->grade ?? null;
    }



}


$student = new Students("Thành", 22, 9, "cntt");

$student->grade = 10;

$student->displayInfo();







?>