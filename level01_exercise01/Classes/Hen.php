<?php

require_once "Animal.php";

class Hen extends Animal
{

    public function speak(): string
    {
        return $this->name . " says: Pokook!";
    }
}
