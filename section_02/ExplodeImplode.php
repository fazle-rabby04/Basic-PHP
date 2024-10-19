<?php
// Original string
$string = "The quick brown fox jumps over the lazy dog";

// Step 1: Split the string into words
$wordsArray = explode(" ", $string);

// Display the array
print_r($wordsArray);
// Outputs: Array ( [0] => The [1] => quick [2] => brown [3] => fox [4] => jumps [5] => over [6] => the [7] => lazy [8] => dog )

// Step 2: Modify an element in the array
$wordsArray[4] = "leaps";

// Display the modified array
print_r($wordsArray);
// Outputs: Array ( [0] => The [1] => quick [2] => brown [3] => fox [4] => leaps [5] => over [6] => the [7] => lazy [8] => dog )

// Step 3: Join the array elements back into a string
$newString = implode(" ", $wordsArray);

// Display the new string
echo $newString; // Outputs: The quick brown fox leaps over the lazy dog

