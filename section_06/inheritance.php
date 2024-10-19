<?php
// Parent class
class Vehicle {
    public $brand;
    protected $model;
    private $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year  = $year;
    }

    public function start() {
        return "The vehicle has started."."\n";
    }

    public function getDetails() {
        return $this->brand . ' ' . $this->model . ' ' . $this->year."\n" ;
    }
}

// Child class inheriting from Vehicle
class Car extends Vehicle {
    public $fuelType;

    public function __construct($brand, $model, $year, $fuelType) {
        parent::__construct($brand, $model, $year); // Call parent constructor
        $this->fuelType = $fuelType;
    }

    // Overriding the start method
    public function start() {
        return "The car has started.";
    }

    // New method specific to the Car class
    public function getFuelType() {
        return $this->fuelType;
    }
}

// Using the Car class
$car = new Car("Toyota", "Corolla", 2020, "Petrol");

echo $car->start();            // Output: The car has started.
echo $car->getDetails();       // Output: Toyota Corolla 2020
echo $car->getFuelType(); 
$vehicle= new Vehicle("BMW","7 SERIES" ,"2022")  ;   // Output: Petrol
echo $vehicle->start();            // Output: The car has started.
echo $vehicle->getDetails();       // Output: Toyota Corolla 2020  
