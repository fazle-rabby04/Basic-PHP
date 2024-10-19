<?php
class Vehicle {
    public $brand;          // Public property
    protected $model;       // Protected property
    private $year;          // Private property

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year  = $year;
    }

    public function getDetails() {
        return $this->brand . ' ' . $this->model . ' ' . $this->year;
    }

    private function getYear() {  // Private method
        return $this->year;
    }
}

class Car extends Vehicle {
    public function getModel() {
        return $this->model; // Accessible because it's protected
    }
}

$car = new Car("Toyota", "Corolla", 2020);
echo $car->brand;        // Public: Accessible
echo $car->getModel();   // Protected: Accessible through a subclass method
// echo $car->year;      // Private: Not accessible, will cause an error
// echo $car->getYear(); // Private: Not accessible, will cause an error