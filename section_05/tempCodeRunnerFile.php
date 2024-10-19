<?php

// Define a callback function
//array_map(callable $callback, array $array1[, array $array2[, array $...]])

function square($number) {
    return $number * $number;
}

// Input array
$numbers = [1, 2, 3, 4, 5];

// Apply the callback function to each element of the array
$squaredNumbers = array_map('square', $numbers);

print_r($squaredNumbers);
// Print the results
foreach ($squaredNumbers as $numbers) {
    echo $numbers . "\n";
}
$NewNumbers= array_map(function ($number)  {
    return $number * $number;
}, $numbers);
print_r($NewNumbers);