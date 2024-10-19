//The null coalescing operator (??) in PHP is used to simplify the checking of a value's existence 
//to provide a default value if it does not exist. 
//This operator is particularly useful for working with arrays and handling optional parameters.
$variable = $expression1 ?? $expression2;
<?php
$name = null;
$defaultName = 'Guest';

$displayName = $name ?? $defaultName;
echo $displayName; // Outputs: Guest


$data = ['username' => 'john_doe'];

$username = $data['username'] ?? 'anonymous';
echo $username; // Outputs: john_doe

$email = $data['email'] ?? 'no_email@example.com'; 
echo $email; // Outputs: no_email@example.com


