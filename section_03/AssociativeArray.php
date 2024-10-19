<?php

// Creating an associative array
$student = array(
  "name" => "John Doe",
  "age" => 20,
  "grade" => "A"
);

// Accessing values in the associative array
echo "Name: " . $student["name"] . "\n";
echo "Age: " . $student["age"] . "\n";
echo "Grade: " . $student["grade"] . "\n";

// Modifying values in the associative array
$student["age"] = 21;
$student["grade"] = "B";

// Adding a new key-value pair to the associative array
$student["city"] = "New York";

// Displaying the modified associative array
echo "Modified Age: " . $student["age"] . "\n";
echo "Modified Grade: " . $student["grade"] . "\n";
echo "City: " . $student["city"] . "<br>";

$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);

// Accessing values
echo "Peter is " . $age['Peter'] . " years old.\n";

// Adding elements
$age['John'] = 25;

// Looping through the array
foreach($age as $name => $value) {
    echo "$name is $value years old.\n";
}

