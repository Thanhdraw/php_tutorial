<?php

require "index.php";
class student extends Person
{
    public static $totalStudent = 0;
    public string $major;
    private float $grade;
    public function __construct($name, $age, $major, $grade)
    {
        parent::__construct($name, $age);
        $this->major = $major;
        $this->grade = $grade;
        self::$totalStudent++;
    }

    public function __get($grade)
    {
        return $this->grade ?? null;
    }
    public function __set($grade, $newGrade)
    {
        $this->grade = $newGrade;
    }
    public static function getTotalStudent()
    {
        return self::$totalStudent;
    }
    public function getInfo()
    {
        return parent::getInfo() . "Major is: $this->major" . PHP_EOL . "$this->name has grade $this->grade" . "<br>";
    }


}


$student1 = new student("Thành Đặng", 20, "CNTT", 9.5);
$student2 = new student("Trương Đăng Khoa", 5, "KHMT", 10);

// có thể cập nhật được vì phương thức $major là public , còn nếu private thì error.
$student1->major = "AI";
$student1->grade = 5.6;


echo $student1->getInfo();
echo $student2->getInfo();

echo "Tổng số học sinh: " . student::getTotalStudent();


?>