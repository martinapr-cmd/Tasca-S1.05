<?php

require_once "Animal.php";

class Cat extends Animal
{

    public function speak(): string
    {
        return $this->name . " says: Miaaaau!";
    }
}
