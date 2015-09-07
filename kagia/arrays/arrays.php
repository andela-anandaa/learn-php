<?php

// normal array

$a = array(1, 2, 3, 4, 5, 6 ,7, 8, 9, 10, 11, 12);

$mix = array(10, "apples", "mangoes", array(1, 3, 10), 35.3);

$b = range(0, 11);

// matrix
$matrix = [
  [10, 30, 50],
  [10, 3, 50],
  [6, 10, 12]
];

// using range() to create arrays
$b = range(0, 11);
$chars = range('A', 'z');

print_r($chars);


for ($i = 0; $i < sizeof($b); $i++) {
  echo $a[$i] . "\n";
}

$transformed = [];

for ($i = 0, $len = sizeof($matrix); $i < $len; $i++) {
  $sum = 0;

  for ($j = 0, $inner_len = sizeof($matrix[$i]); $j < $inner_len; $j++) {
    $sum += $matrix[$i][$j];
  }

  $transformed[$i] = $sum;
}

print_r($transformed);


foreach ($mix as $item) {
  print_r($item);
  echo "\n";
}

// associative array
$ar = array(
  "Kagia" => ["C++", "Javascript", "Python", "PHP"],
  "Stacey" => ["C", "Javascript", "PHP"],
  "Alex" => ["C"],
  "Brian" => ["C++", "Javascript", "Python", "PHP"]
);

// to access items in the array
$ar["Kagia"];

foreach ($ar as $key => $value) {
  echo $key . ":" . sizeof($value) . "\n";
}


// binary search function
$haystack = range(10, 45);

if (!function_exists("binary search")) {
  function binary_search($array, $item) {
    $l = 0;
    $u = count($haystack) - 1;

    while ($l <= $u) {
      $m = floor(($u + $l) / 2);
      if ($array[$m] == $item) {
        return $m;
      } else {
        if ($array[$m] > $item) {
          $u = $m -1;
        } else {
          $l = $m + 1;
        }
      }
    }

    return -1;
  }
}


// array INFs
$numbers = range(1, 100);

function cube_square($x) {
  return pow($x, 3) + pow($x, 2);
}

$num_mapped = array_map("cube_square", $numbers);

print_r($num_mapped);

function sum($carry, $item) {
  $carry += $item;
  return $carry;
}

echo array_reduce($numbers, "sum") . "\n";
// array slice

$a = range('a', 'f');
print_r($a);
echo "\n";
print_r(array_slice($a, 2, -1));
