<?php
abstract class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Abstract method
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        echo $this->name . " says Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo $this->name . " says Meow!";
    }
}

$dog = new Dog("Buddy");
$dog->makeSound(); // Output: Buddy says Woof!

$cat = new Cat("Whiskers");
$cat->makeSound(); // Output: Whiskers says Meow!

