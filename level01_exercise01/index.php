<?php

require_once 'Classes/Hen.php';
require_once 'Classes/Cat.php';
require_once 'Classes/Dog.php';

$hen = new Hen("Some hen");
$cat = new Cat("Some cat");
$dog = new Dog("Some dog");

echo $hen->speak() . "\n";
echo $cat->speak() . "\n";
echo $dog->speak() . "\n";
