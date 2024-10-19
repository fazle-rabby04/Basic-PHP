<?php

// Conditional operators
$age = 25;

if ($age >= 18 && $age <= 30) {
  echo "You are in the eligible age group.";
} else {
  echo "You are not in the eligible age group.";
}

// Logical operators
$hasAccount = true;
$isLoggedIn = false;

if ($hasAccount && $isLoggedIn) {
  echo "You are logged in.";
} elseif ($hasAccount && !$isLoggedIn) {
  echo "Please log in to continue.";
} else {
  echo "You need to create an account.";
}
