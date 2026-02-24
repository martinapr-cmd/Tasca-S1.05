<?php

require_once 'ShapeN2.php';

class Rectangle implements ShapeN2
{

    private float $width;
    private float $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float
    {
        return $this->width * $this->height;
    }
}
