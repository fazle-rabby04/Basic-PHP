<?php
function add($a=0, $b=0) {
    return $a + $b."\n";
}
function subtract($a=0, $b=0) {
    return $a - $b;
}
echo add(10, 4);
echo subtract()."\n";

function addAll(...$numbers)
{
  $total=0;
  foreach($numbers as $number)
  {
    $total += $number;
  }
  return $total;
}
echo addAll(1,2,3,4,5,6,7,8,9,10);