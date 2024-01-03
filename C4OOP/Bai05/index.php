<?php

include_once "./Interface/Edible.php";
include_once "./Abstract/Animal.php";
include_once "./Abstract/Fruit.php";
include_once "./Animal/Chicken.php";
include_once "./Animal/Tiger.php";
include_once "./Fruit/Apple.php";
include_once "./Fruit/Orange.php";

use Animal\Chicken;
use Animal\Tiger;
use Fruit\Apple;
use Fruit\Orange;

echo ('---- Animals ------</br>');

$animals[] = new Tiger();
$animals[] = new Chicken();

foreach ($animals as $animal) {
    echo $animal->makeSound();

    if (is_a($animal, 'Interface\Edible')) {
        echo " " . $animal->howToEat() . '</br>';
    } else {
        echo "</br>";
    }
}

echo ('---- Fruits ------</br>');

$fruits[] = new Apple();
$fruits[] = new Orange();

foreach ($fruits as $fruit) {
    echo $fruit->howToEat() . '</br>';
}
