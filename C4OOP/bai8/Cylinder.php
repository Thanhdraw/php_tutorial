<?php

class Cylinder extends Circle
{
    private float $height;
    public function __construct($radius, $pi, $height)
    {
        parent::__construct($radius, $pi);
        $this->height = $height;
    }
    public function calculateVolumn(): int
    {
        return (2 * $this->pi * $this->radius * $this->height);
    }
    public function calculateArea(): float
    {
        return ($this->calculateVolumn() + 2 * $this->pi * pow($this->height, 2));
    }

}


?>