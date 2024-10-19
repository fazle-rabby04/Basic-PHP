<?php

// Implicit typecasting
$number = 10; // integer
$floatNumber = $number; // implicitly cast to float
$stringNumber = (string) $number; // explicitly cast to string

// Explicit typecasting
$float = 3.14; // float
$int = (int) $float; // explicitly cast to integer
$string = strval($float); // explicitly cast to string

// Typecasting with functions
$bool = true; // boolean
$intBool = intval($bool); // cast boolean to integer (1 for true, 0 for false)
$stringBool = strval($bool); // cast boolean to string ("1" for true, "" for false)

// Typecasting with settype() function
$value = "123"; // string
settype($value, "integer"); // cast string to integer

