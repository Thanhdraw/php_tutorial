<?php
namespace Animal;

use abstrac\Animal;
use Interfac\Edible;

class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        return "Chicken: cluck-cluck!";
    }
    function howToEat(): string
    {
        return "Could be fried";
    }
}



?>