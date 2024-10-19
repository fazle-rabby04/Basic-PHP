<?php
$people = array(
    array("Peter", 35, "Doctor"),
    array("Ben", 37, "Engineer"),
    array("Joe", 43, "Teacher")
);

// Accessing elements
echo $people[0][0] . "\n"; // Outputs: Peter
echo $people[1][2] . "\n"; // Outputs: Engineer

// Adding elements
$people[3] = array("John", 25, "Artist");
$people[1][3] = "New York"; // Adds a new element to Ben's array

// Looping through the array
foreach($people as $person) {
    foreach($person as $detail) {
        echo $detail . " ";
    }
    echo "\n";
}

$users =[
    ["name" => "Peter", "age" => 35, "occupation" => "Doctor"],
    ["name" => "Ben", "age" => 37, "occupation" => "Engineer"],
    ["name" => "Joe", "age" => 43, "occupation" => "Teacher"]
];
// foreach($users as $user) {
//     foreach($user as $detail) {
//         echo $detail . " ";
//     }
//     echo "\n";
// }   
foreach($users as $user) {
    foreach($user as $key => $value) {
        echo $key . ": " . $value . " ";
    }
    echo "\n";
}