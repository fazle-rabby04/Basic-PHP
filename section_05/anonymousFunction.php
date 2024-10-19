<?php

$square = function($number) {
    return $number * $number;
};

$result = $square(5);
echo $result; // This will output 25

// Closure for counter

function CreateCounter()
{
    $count = 0;

    $counter = function() use (&$count) {
        return ++$count;
    };

    return $counter;
}

$counter = CreateCounter();
echo $counter(); // This will output 1

echo $counter(); // This will output 2

echo $counter(); // This will output 3
