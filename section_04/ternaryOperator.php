<?php

// Example 1: Assigning a value based on a condition
$age = 25;
$isAdult = ($age >= 18) ? true : false;
echo "Is the person an adult? " . ($isAdult ? "Yes" : "No");

// Example 2: Returning a value based on a condition
function getDiscount($isPremiumMember) {
  return ($isPremiumMember) ? 0.2 : 0.1;
}

$price = 100;
$isPremiumMember = true;
$discount = $price * getDiscount($isPremiumMember);
echo "Discounted price: $" . ($price - $discount);
