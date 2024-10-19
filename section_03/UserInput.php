// cli_input.php
<?php
echo "Enter your name: ";
$name = trim(fgets(STDIN));
echo "Enter your age: ";
$age = trim(fgets(STDIN));

echo "Name: " . $name . "\n";
echo "Age: " . $age . "\n";
