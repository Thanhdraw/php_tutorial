<?php

interface Animal
{
    public function makeSound();
}

class Dog implements Animal
{
    public function makeSound()
    {
        echo "Gau gau" . PHP_EOL;
    }
}
class Cat implements Animal
{
    public function makeSound()
    {
        echo "meow meow";
    }
}

$dog = new Dog();
$cat = new Cat();

$dog->makeSound();
$cat->makeSound();

?>