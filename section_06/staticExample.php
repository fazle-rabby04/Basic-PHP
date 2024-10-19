<?php
class ParentClass {
    public static function greet() {
        return "Hello from ParentClass";
    }

    public static function callGreet() {
        return static::greet(); // Late static binding
    }
}

class ChildClass extends ParentClass {
    public static function greet() {
        return "Hello from ChildClass";
    }
}

echo ParentClass::callGreet(); // Output: Hello from ParentClass
echo ChildClass::callGreet();  // Output: Hello from ChildClass