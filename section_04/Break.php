The break statement is used to terminate the execution of the nearest enclosing loop or switch statement. 
When a break statement is encountered, control is passed to the statement immediately following the terminated loop or switch.

<?php
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break; // Exit the loop when $i is 5
    }
    echo $i . "\n";
}

//The continue statement is used to skip the remaining code inside the current iteration of a loop and proceed to the next iteration. 
//It works with for, foreach, while, and do-while loops.
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        continue; // Skip the rest of the code in this iteration when $i is 5
    }
    echo $i . "\n";
}
//When using the break statement in nested loops, it is important to understand how it affects multiple levels of loops. 
//By default, a break statement without any argument will only exit the innermost loop in which it resides. 
//However, you can specify how many levels of nested loops to break out of by providing a numeric argument to the break statement.
for ($i = 0; $i < 3; $i++) {
    echo "Outer loop iteration $i\n";
    for ($j = 0; $j < 3; $j++) {
        echo " - Middle loop iteration $j\n";
        for ($k = 0; $k < 3; $k++) {
            echo " -- Inner loop iteration $k\n";
            if ($k == 1) {
                break; // Break out of the innermost loop
            }
        }
    }
}
//If you want to break out of multiple levels of nested loops,
//you can provide an argument to the break statement to specify how many levels to break out of.

for ($i = 0; $i < 3; $i++) {
    echo "Outer loop iteration $i\n";
    for ($j = 0; $j < 3; $j++) {
        echo " - Middle loop iteration $j\n";
        for ($k = 0; $k < 3; $k++) {
            echo " -- Inner loop iteration $k\n";
            if ($k == 1) {
                break 2; // Break out of the middle and inner loop
            }
        }
    }
}
//When dealing with nested loops, you can specify which loop to break out of
// by providing an optional numeric argument to break or continue.
// The argument indicates the number of levels of nested loops to break or continue from.
for ($i = 0; $i < 3; $i++) {
    echo "Outer loop iteration $i\n";
    for ($j = 0; $j < 3; $j++) {
        if ($j == 1) {
            break 2; // Break out of both loops
        }
        echo " - Inner loop iteration $j\n";
    }
}

for ($i = 0; $i < 3; $i++) {
    echo "Outer loop iteration $i\n";
    for ($j = 0; $j < 3; $j++) {
        if ($j == 1) {
            continue 2; // Skip the rest of the iteration of both loops and move to the next iteration of the outer loop
        }
        echo " - Inner loop iteration $j\n";
    }
}
