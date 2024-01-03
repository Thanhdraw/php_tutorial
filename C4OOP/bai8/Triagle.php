<?php

class Triagle extends Shape
{
    public float $side1;
    public float $side2;

    public float $side3;

    public function __construct($name, $side1, $side2, $side3)
    {
        parent::__construct($name);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;

    }

    public function getArea(): float
    {
        return (pow($this->side1, 2) * (sqrt(3) / 4));
    }

    public function getPerimeter(): float
    {
        return (3 * $this->side1);
    }

    public function toString()
    {
        echo "$this->name" . "Dien tich tam giac: " . $this->getArea() . "Chu vi tam giac la: " . $this->getPerimeter();
    }


}





?>