<?php

require_once "ShapeN2.php";

class Triangle implements ShapeN2
{

    private float $base;
    private float $height;

    public function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function getArea(): float
    {
        return ($this->base * $this->height) / 2;
    }
}
