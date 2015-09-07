<?php

// arrays inbuilt functions (INFs)

$numbers = range(10, 100);

// array_map

function cube_square($x) {
  return pow($x, 3) + pow($x, 2);
}

$num_mapped = array_map("cube_square", $numbers);

print_r($num_mapped);

function sum($carry, $item) {
  $carry += $item;
  return $carry;
}

echo array_reduce($numbers, "sum")."\n";
// array_slice

$a = range("a", "f");
print_r($a);
echo "\n";
print_r(array_slice($a, 2, -1));
