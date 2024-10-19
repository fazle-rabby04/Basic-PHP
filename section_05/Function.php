<?php 

function sayHello($name) {
  echo "Hello, $name!";
}
function sayGoodBye()
{
  return "Goodbye ";
}
$name = "John";
sayHello($name);
$goodBye = sayGoodBye();
echo $goodBye;
