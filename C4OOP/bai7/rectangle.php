<?php
//  <option value="perimeter">Chu vi</option>
//  <option value="area">Diện tích</option>
class Rectangle
{
    public float $width;
    public float $height;

    public function __construct($width, $height)
    {
        if (!is_numeric($width) || !is_numeric($height) || $width < 0 || $height < 0) {
            throw new InvalidArgumentException("Your width and height invalid");
        }
        $this->width = $width;
        $this->height = $height;
    }

    public function perimeter()
    {
        return (($this->width + $this->height) * 2);
    }

    public function area()
    {
        return ($this->width * $this->height);
    }

}

?>