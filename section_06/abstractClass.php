<!-- Key Concepts of Abstract Classes:
Abstract Classes: A class that is declared with the abstract keyword and cannot be instantiated.
Abstract Methods: Methods declared in an abstract class without implementation. 
                  These methods must be implemented in any subclass that extends the abstract class.
Inheritance: Subclasses inherit the abstract class and are required to implement the abstract methods. -->

<!-- Abstract Class: A class that cannot be instantiated and is meant to be inherited by other classes.
Abstract Method: A method declared in an abstract class without an implementation. Subclasses must implement these methods.
Concrete Methods: Methods in an abstract class that have a full implementation and can be used or overridden by subclasses.
Inheritance: Subclasses of an abstract class must implement all abstract methods, or they themselves must be declared abstract. -->

<?php
abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$circle= new Circle(5);
echo $circle->calculateArea(); // Output: 78.54
$rectangle= new Rectangle(5, 10);
echo $rectangle->calculateArea(); // Output: 50
