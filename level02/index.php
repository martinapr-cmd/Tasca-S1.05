<?php

require_once 'classes/Triangle.php';
require_once 'classes/Rectangle.php';
require_once 'classes/Circle.php';

$rectangle = new Rectangle(5, 10);
$triangle = new Triangle(5, 10);
$circle = new Circle(5);

echo "Area of Rectangle: " . $rectangle->getArea() . "\n";
echo "Area of Triangle: " . $triangle->getArea() . "\n";
echo "Area of Circle: " . $circle->getArea() . "\n";
