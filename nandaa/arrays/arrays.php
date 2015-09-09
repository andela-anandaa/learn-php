<?php

// normal array

$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// short array syntax
$c = [10, 40, 20, 45];

$mix = array(10, "apples", "mangoes",
              array(1, 3, 10), 35.3);

// matrix
$matrix = [
    [10, 30, 50],
    [10, 3, 50],
    [6, 10, 12]
  ];

// using range() to create arrays
$b = range(0, 11);

// generate alphabet with range() function
$chars = range("a", "m");
print_r($chars);

for ($i = 0; $i < sizeof($b); $i++) {
  echo $a[$i]."\n";
}

$transformed = [];

for ($i = 0, $len = sizeof($matrix); $i < $len; $i++) {
  $sum = 0;
  for ($j = 0, $innerLen = sizeof($matrix[$i]); $j < $innerLen; $j++) {
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
  "Kagia" => ["C++", "JavaScript", "Python", "PHP"],
  "Stacey" => ["C", "JavaScript", "PHP"],
  "Alex" => ["C", "JavaScript", "Python"],
  "Brian" => ["C++", "JavaScript", "Python", "PHP"]
);

// to access items in the array
$ar["Kagia"];

foreach ($ar as $key => $value) {
  echo $key.": ".sizeof($value)."\n";
}

// binary search function
// to explain While loop

if (!function_exists("binary_search")) {
  function binary_search($array) {
    $l = 0;
    $u = count($array) - 1;

    while ($l <= $u) {
      $m = floor(($u + $l) / 2);
      if ($array[$m] == $item) {
        return $m;
      } else {
        if ($array[$m] > $item) {
          $u = $m - 1;
        } else {
          $l = $m + 1;
        }
      }
    }

    return -1;
  }
}

$haystack = range(10, 45);
echo binary_search($haystack, 22)."\n";
