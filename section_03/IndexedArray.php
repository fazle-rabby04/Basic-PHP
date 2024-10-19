<?php
// Creating an indexed array
$fruits = ["apple", "banana", "cherry"];
echo "Initial array:\n";
print_r($fruits);

// Accessing elements
echo "First fruit: " . $fruits[0] . "\n"; // Outputs: apple

// Adding elements
$fruits[] = "date";
array_push($fruits, "elderberry");
echo "Array after adding elements:\n";
print_r($fruits);

// Removing elements
/*unset(): Use when you want to remove a specific element from an array by its index.
It's useful when you know the exact index of the element you want to remove.
*/
//array_pop(): Use when you want to remove the last element from an array.
//It's handy for stack operations or when you need to process elements in reverse order.
unset($fruits[1]); // Removes "banana"
array_pop($fruits); // Removes "elderberry"
$fruits = array_values($fruits); // Reindex the array
echo "Array after removing elements and reindexing:\n";
print_r($fruits);

// Looping through the array using a for loop
echo "Looping with a for loop:\n";
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "\n";
}

// Looping through the array using a foreach loop
echo "Looping with a foreach loop:\n";
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}

