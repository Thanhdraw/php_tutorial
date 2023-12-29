<?php
class Rectangle extends Shape
{
    // hình chữ nhật
    public int $width;
    public int $height;

    public function __construct($name, $width, $height, )
    {
        parent::__construct($name);
        $this->width = (int) $width;
        $this->height = (int) $height;

    }

    public function calculateArea(): float|int
    {
        return ($this->width * $this->height);
    }
    public function calculatePerimeter(): float|int
    {
        return (($this->width + $this->height) * 2);
    }
}




?>