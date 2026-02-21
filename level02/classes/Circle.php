<?php

require_once "ShapeN2.php";

Class Circle extends ShapeN2 {

private float $radius;

public function __construct($radius) {
$this->radius = $radius;
}

public function getArea(): float {
return pi() * pow($this->radius, 2);
    }
}


?>