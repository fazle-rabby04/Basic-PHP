<?php

// Using a Named Function as a Callback
function callbackFunction($value) {
    return $value * 2;
}

function processArray($array, $callback) {
    foreach ($array as $item) {
        echo $callback($item) . "\n";
    }
}

$numbers = [1, 2, 3, 4, 5];
processArray($numbers, 'callbackFunction');

// Using an Anonymous Function as a Callback
function processArrayWithCallback($array, $callback) {
    foreach ($array as $item) {
        echo $callback($item) . "\n";
    }
}

// Define an anonymous function
$double = function($value) {
    return $value * 2;
};

// Use the anonymous function as a callback
$numbers = [1, 2, 3, 4, 5];
processArrayWithCallback($numbers, $double);
