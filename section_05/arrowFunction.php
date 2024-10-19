<!-- Syntax: Arrow functions use the fn keyword and a => symbol for concise syntax.
Automatic Variable Capture: Automatically captures variables from the surrounding scope.
Single Expression: Can only contain a single expression, which is returned automatically. -->
<?php

// Example 1: Basic Arrow Function
$double = fn($x) => $x * 2;
echo "Double of 5: " . $double(5) . "\n"; // Outputs: 10

// Example 2: Arrow Function with array_map
$numbers = [1, 2, 3, 4, 5];
$squaredNumbers = array_map(fn($x) => $x * $x, $numbers);
echo "Squared Numbers: ";
print_r($squaredNumbers);

// Example 3: Arrow Function with Variables from Outer Scope
$multiplier = 3;
$multiply = fn($x) => $x * $multiplier;
echo "5 multiplied by $multiplier: " . $multiply(5) . "\n"; // Outputs: 15

