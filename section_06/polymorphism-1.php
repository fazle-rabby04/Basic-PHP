<!-- In polymorphism through inheritance, a subclass can override methods of its parent class, 
allowing you to use the parent class reference to refer to an object of the subclass. 
This way, you can call the overridden methods of the subclass through the parent class reference. -->



<?php
class Vehicle {
    public function startEngine() {
        echo "Engine started";
    }
}

class Car extends Vehicle {
    public function startEngine() {
        echo "Car engine started";
    }
}

class Bike extends Vehicle {
    public function startEngine() {
        echo "Bike engine started";
    }
}

function startVehicleEngine(Vehicle $vehicle) {
    $vehicle->startEngine();
}

$car = new Car();
$bike = new Bike();

startVehicleEngine($car); // Output: Car engine started
startVehicleEngine($bike); // Output: Bike engine started

