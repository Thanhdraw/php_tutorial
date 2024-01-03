<?php


// Bài tập 2: Đa hình
// Tạo một interface (giao diện) hoặc lớp trừu tượng Animal (Động vật) với phương thức makeSound. Tạo các lớp con như Dog, Cat, và Cow, mỗi lớp đều triển khai makeSound theo cách khác nhau.

namespace dahinh;

interface Animal
{
    public function makeSound();
}

class Dog implements Animal
{
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function makeSound()
    {
        echo "$this->name has sound gau gau" . "<br>";
    }
}

class Cat implements Animal
{
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function makeSound()
    {
        echo "$this->name has sound MeowMeow";
    }
}

$dog = new Dog("cho");
$cat = new Cat("mèo");

$dog->makeSound();
$cat->makeSound();





?>