<?php
class Animal {
    public function makeSound() {
        echo "Some generic animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow!";
    }
}

$animal = new Animal();
$animal->makeSound(); // Output: Some generic animal sound

$dog = new Dog();
$dog->makeSound(); // Output: Woof!

$cat = new Cat();
$cat->makeSound(); // Output: Meow!

