<?php
$values = [4, 2, 8, 6];

// Finding the maximum and minimum values
$maxValue = max($values);
$minValue = min($values);

// Rounding numbers
$number = 7.8;
$floorValue = floor($number);
$ceilValue = ceil($number);

// Generating random numbers
$randomValue = rand();
$randomValueInRange = rand(1, 100);

// Displaying the results
echo "Max value: $maxValue\n"; // Outputs: 8
echo "Min value: $minValue\n"; // Outputs: 2
echo "Floor value: $floorValue\n"; // Outputs: 7
echo "Ceil value: $ceilValue\n"; // Outputs: 8
echo "Random value: $randomValue\n"; // Outputs: some random number
echo "Random value in range (1-100): $randomValueInRange\n"; // Outputs: random number between 1 and 100

