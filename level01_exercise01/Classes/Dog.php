<?php

require_once "Animal.php";

class Dog extends Animal {

public function speak(): string {
    return $this->name . " says: BARK!";
}

}


?>