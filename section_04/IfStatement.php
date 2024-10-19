<?php

// Example 1: if statement
$age = 18;

if ($age >= 18) {
  echo "You are eligible to vote.";
} else {
  echo "You are not eligible to vote.";
}

// Example 2: if-else if-else statement
$score = 85;

if ($score >= 90) {
  echo "You got an A!";
} elseif ($score >= 80) {
  echo "You got a B!";
} elseif ($score >= 70) {
  echo "You got a C!";
} else {
  echo "You need to improve your score.";
}

// Example 3: switch statement
$day = "Monday";

switch ($day) {
  case "Monday":
    echo "Today is Monday.";
    break;
  case "Tuesday":
    echo "Today is Tuesday.";
    break;
  case "Wednesday":
    echo "Today is Wednesday.";
    break;
  default:
    echo "Today is not a weekday.";
}
