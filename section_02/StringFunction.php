<?php
// Original string
$string = " Hello, World! Welcome to PHP string functions. ";

// 1. Get the length of the original string
$length = strlen($string);

// 2. Trim the string
$trimmedString = trim($string);

// 3. Convert to uppercase
$uppercaseString = strtoupper($trimmedString);

// 4. Replace a word
$replacedString = str_replace("PHP", "awesome PHP", $uppercaseString);

// 5. Find position of a word
$position = strpos($replacedString, "AWESOME");

// 6. Extract a substring
$substring = substr($replacedString, $position, 7);

// 7. Split the string into an array
$array = explode(" ", $trimmedString);

// 8. Join the array elements into a string
$joinedString = implode(", ", $array);

// 9. Convert special characters to HTML entities
$specialCharString = "<div>PHP is great & it's fun!</div>";
$safeString = htmlspecialchars($specialCharString);

// 10. Format a string using sprintf
$name = "John";
$age = 30;
$formattedString = sprintf("My name is %s and I am %d years old.", $name, $age);

// 11. Generate hash values
$password = "password";
$md5Hash = md5($password);
$sha1Hash = sha1($password);
$sha256Hash = hash('sha256', $password);

// Display results
echo "Original String: '$string'\n";
echo "Length of Original String: $length\n";
echo "Trimmed String: '$trimmedString'\n";
echo "Uppercase String: '$uppercaseString'\n";
echo "Replaced String: '$replacedString'\n";
echo "Position of 'AWESOME': $position\n";
echo "Extracted Substring: '$substring'\n";
echo "Array from Trimmed String: ";
print_r($array);
echo "Joined String: '$joinedString'\n";
echo "Safe String: '$safeString'\n";
echo "Formatted String: '$formattedString'\n";
echo "MD5 Hash: $md5Hash\n";
echo "SHA1 Hash: $sha1Hash\n";
echo "SHA256 Hash: $sha256Hash\n";

