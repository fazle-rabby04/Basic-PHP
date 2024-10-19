<?php

// Define the callback function
function SquareFunction($num) {
    return $num * $num;
}

// Define the function that applies the callback
function callBack($square, $numbers) {
    $result = [];
    foreach ($numbers as $number) {
        $result[] = $square($number); // Correctly call the callback function
    }
    return $result;
}

// Input array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Apply the callback function to each element of the array
$squaredNumbers = callBack('SquareFunction', $numbers);

// Print the results
print_r($squaredNumbers);

$NewNumbers= array_map('SquareFunction', $numbers);
print_r($NewNumbers);