<?php
class Car {
    // Properties
    public $make;
    public $model;
    public $year;

    // Constructor
    public function __construct($make, $model, $year) {
        $this->make  = $make;
        $this->model = $model;
        $this->year  = $year;
    }

    // Methods
    public function start() {
        return "The car has started.";
    }

    public function getCarInfo() {
        return $this->year . ' ' . $this->make . ' ' . $this->model;
    }
}

// Creating objects from the Car class
$car1 = new Car("Toyota", "Corolla", 2020);
$car2 = new Car("Honda", "Civic", 2018);

// Accessing object methods
echo $car1->getCarInfo(); // Output: 2020 Toyota Corolla
echo $car2->start();       // Output: The car has started.

