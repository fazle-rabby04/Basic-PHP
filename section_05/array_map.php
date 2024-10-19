<?php

// Example 1: Basic Usage with a Single Array
echo "Example 1: Basic Usage with a Single Array\n";
function double($number) {
    return $number * 2;
}
$numbers = [1, 2, 3, 4, 5];
$doubledNumbers = array_map('double', $numbers);
echo "Doubled Numbers: ";
print_r($doubledNumbers);
echo "\n";

// Example 2: Using an Anonymous Function
echo "Example 2: Using an Anonymous Function\n";
$squaredNumbers = array_map(fn($number) => $number * $number, $numbers);
echo "Squared Numbers: ";
print_r($squaredNumbers);
echo "\n";

// Example 3: Transforming Multiple Arrays
echo "Example 3: Transforming Multiple Arrays\n";
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$sumArray = array_map(fn($a, $b) => $a + $b, $array1, $array2);
echo "Sum of Corresponding Elements: ";
print_r($sumArray);
echo "\n";

// Example 4: Using `array_map` with Objects
echo "Example 4: Using `array_map` with Objects\n";
class Multiplier {
    private $factor;
    
    public function __construct($factor) {
        $this->factor = $factor;
    }

    public function multiply($number) {
        return $number * $this->factor;
    }
}

$multiplier = new Multiplier(3);
$multipliedNumbers = array_map([$multiplier, 'multiply'], $numbers);
echo "Numbers Multiplied by Factor: ";
print_r($multipliedNumbers);
echo "\n";

// Example 5: Formatting Strings in an Array
echo "Example 5: Formatting Strings in an Array\n";
$strings = ['apple', 'banana', 'cherry'];
$toUpperCase = fn($string) => strtoupper($string);
$uppercasedStrings = array_map($toUpperCase, $strings);
echo "Uppercased Strings: ";
print_r($uppercasedStrings);
echo "\n";

// Example 6: Applying a Callback with Default Value
echo "Example 6: Applying a Callback with Default Value\n";
function appendSuffix($string, $suffix = '-suffix') {
    return $string . $suffix;
}
$modifiedWords = array_map(fn($word) => appendSuffix($word), $strings);
echo "Modified Words with Default Suffix: ";
print_r($modifiedWords);
echo "\n";

