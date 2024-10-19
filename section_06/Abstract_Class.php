<?php
abstract class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function makeSound();

    public function sleep() {
        echo $this->name . " is sleeping.";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo $this->name . " says Woof!";
    }
}

$dog = new Dog("Buddy");
$dog->makeSound(); // Output: Buddy says Woof!
$dog->sleep();     // Output: Buddy is sleeping.
