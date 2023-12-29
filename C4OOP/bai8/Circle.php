<?php

class Circle extends Shape
{
    protected float $radius;
    protected float $pi;
    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->pi = M_PI;
        if ($radius > 0) {
            $this->radius = $radius;
        } else {
            echo "Cần số nguyên dương";
        }
    }
    public function __get($radius)
    {
        return $this->radius;
    }
    public function __set($radius, $newRadius)
    {
        return $this->radius = $newRadius;
    }
    public function calculateArea(): float
    {
        return ((pow($this->radius, 2) * $this->pi));
    }
    public function calculatePerimeter(): float
    {
        return (2 * $this->pi * $this->radius);
    }
}



?>