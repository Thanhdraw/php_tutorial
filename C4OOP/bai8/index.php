<?php
include_once('Shape.php');
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');


$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . number_format($circle->calculateArea(), 2) . '<br />';
echo 'Circle perimeter: ' . number_format($circle->calculatePerimeter(), 2) . '<br />';
$circle->__set(3, 6);
echo 'Circle area update: ' . number_format($circle->calculateArea(), 2) . '<br />';
echo 'Circle perimeter: ' . number_format($circle->calculatePerimeter(), 2) . '<br />';

$cylinder = new Cylinder('Cylinder 01', 3, 4);
echo 'Cylinder area: ' . number_format($cylinder->calculateArea(), 2) . '<br />';
echo 'Cylinder perimeter: ' . number_format($cylinder->calculatePerimeter(), 2) . '<br />';

// $cylinder->__set(3, 9);
// echo "Cylinder update: " . number_format($cylinder->calculateArea(), 2) . PHP_EOL;

$rectangle = new Rectangle('Rectangle01', 3, 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

// $square = new Square('Square 01', 4);
// echo 'Square area: ' . $square->calculateArea() . '<br />';
// echo 'Square perimeter: ' . $square->calculatePerimeter() . '<br />';

?>