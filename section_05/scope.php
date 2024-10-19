<?php

//global scope
$name ="Alice";

function sayHello()
{
  //local scope 
  $name = "Bob";
  echo "Hello, $name!";
}
echo sayHello()."\n";
function sayHello1()
{
  global $name;
  echo "Hello, $name!";
}
echo sayHello1();