<?php
// Bài tập 1: Kế thừa
// Xây dựng một hierarchy (cây phân cấp) đối tượng đơn giản như Shape (Hình dạng) có thuộc tính color (màu sắc) và phương thức draw (vẽ). 
// Từ Shape, tạo ra các lớp con như Circle (Hình tròn) và Rectangle (Hình chữ nhật).

namespace kethua;

class Shape
{
    public string $color;
    public string $draw;

    public function __construct($color, $draw)
    {
        $this->color = $color;
        $this->draw = $draw;

    }
    public function displayInfo()
    {
        echo "Shape has color: $this->color ,draw: $this->draw" . "<br>";
    }

}

class Circle extends Shape
{
    public string $name;
    public float $radius;
    public function __construct($name, $color, $draw, $radius)
    {
        parent::__construct($color, $draw);
        $this->name = $name;
        $this->radius = $radius;
    }
    public function displayInfo()
    {
        parent::displayInfo();
        echo "$this->name has $this->radius" . "<br>";
    }
}

class Rectangle extends Shape
{
    public string $name;
    public float $width;
    public float $height;

    public function __construct($name, $color, $draw, $width, $height)
    {
        parent::__construct($color, $draw);
        $this->name = $name;
        $this->width = $width;
        $this->height = $height;
    }
    public function displayInfo()
    {
        parent::displayInfo();
        echo "$this->name has $this->height and $this->width" . "<br>";
    }
}

$circle = new Circle("Hinh tron", "vang", "ve", 12.5);
$rectangle = new Rectangle("Hinh chu nhat", "do", "ve", 12.5, 12.5);
$circle->displayInfo();
$rectangle->displayInfo();

?>