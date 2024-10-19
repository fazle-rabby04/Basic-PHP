<?php


// Method 1: Using array() function
$fruits = array("apple", "banana", "cherry");

// Method 2: Using shorthand syntax
$fruits = ["apple", "banana", "cherry"];

// Accessing elements
echo $fruits[0]; // Outputs: apple
echo $fruits[1]; // Outputs: banana
echo $fruits[2]; // Outputs: cherry


$fruits = ["apple", "banana"];
$fruits[] = "cherry"; // Adds cherry to the end of the array
array_push($fruits, "date"); // Adds date to the end of the array
print_r($fruits); // Outputs: Array ( [0] => apple [1] => banana [2] => cherry [3] => date )


foreach ($fruits as $fruit) {
    echo $fruit . "\n"; // Outputs each fruit in a new line
}
//array_splice(array, offset, length, replacement)
$array = array("red", "green", "blue", "yellow");
array_splice($array, 2); // Removes all elements starting from index 2
print_r($array);
array_splice($array, 1, 2); // Removes 2 elements starting from index 1
print_r($array);
$array = array("red", "green", "blue", "yellow");
array_splice($array, 1, 2, array("black", "white")); // Replaces 2 elements starting from index 1 with "black" and "white"
print_r($array);
$array = array("red", "green", "blue", "yellow");
array_splice($array, 2, 0, array("purple", "orange")); // Inserts "purple" and "orange" at index 2 without removing any elements
print_r($array);
