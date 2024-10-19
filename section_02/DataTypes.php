<?php

// Integer
$age = 25;

// Float
$price = 10.99;

// String
$name = "John Doe";

// Booleans
$isStudent = true;
echo "var_dump($isStudent)\n";

// Array
$fruits = array("apple", "banana", "orange");

// Null
$address = null;

// Output the variables
echo "Age: " . $age . "\n";
echo "Price: " . $price . "\n";
echo "Name: " . $name . "\n";
echo "Is Student: " . ($isStudent ? "Yes" : "No") . "\n";
echo "Fruits: " . implode(", ", $fruits) . "\n";
echo "Address: " . ($address ?? "Not available") . "\n";

// $address is not set
echo "Address: " . ($address ?? "Not available") . "\n";
// Output: Address: Not available

// Or if $address is set to null
$address = null;
echo "Address: " . ($address ?? "Not available") . "\n";
// Output: Address: Not available

