<?php
  
  // An ordinary array, which is indexed by integers

  $a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

  // short array syntax
  $b = [10, 20, 30, 40];

  $mix = array(30, "apples", "mangoes", 
              array(1, 3, 10), 35.3);

  // matrix (multi-dimensional array)
  $matrix = [
      [10, 30, 50],
      [10, 3, 50],
      [2, 45, 19]
    ];

  // range() returns an array whose elements are in a certain range
  // Also works for character values.
  $rangeArray = range('a', 'm');

  for($i = 0; $i < sizeof($a); $i++) {
      echo $a[$i] . "\n";
  }

  /* 
   * Create an array, add each row in the matrix and append
   * the result to the new array
  */

  $transformed = [];

  for($i = 0, $len = sizeof($matrix); $i < $len; $i++) {
    $sum = 0;
    for($j = 0, $innerLen = sizeof($matrix); $j < $innerLen; $j++) {
      $sum += $matrix[$i][$j];
    }
    $transformed[$i] = $sum;
  }

  print_r($transformed);

  // Using for each with a numerically indexed array
  foreach ($rangeArray as $value) {
    echo $value . "\n";
  }

  // Associative array looping
  $associativeArray =  array(
    "Kagia" => ["C++", "JavaScript", "Python", "PHP"], 
    "Stacey" => ["C", "JavaScript", "PHP"],
    "Alex" => ["C", "JavaScript", "Python"],
    "Brian" => ["C++", "JavaScript", "Python", "PHP"]
  );

  foreach ($associativeArray as $key => $value) {
    echo $key . ": " . sizeof($value) . "\n";
  }

  foreach ($mix as $key => $value) {
    if(gettype($value) === 'array') {
      echo $key . ": ";
      for($i = 0; $i < sizeof($value); $i++) {
        echo "\t" . $value[$i] . "\n";
      }
      continue;
    }
    echo $key . ": " . $value . "\n";
  }

  // Binary search function test
  $haystack = range(20, 45);

  // returns the index of the element if not found, -1 otherwise
  function binary_search($anArray, $element) {
    $left = 0;
    $right = count($anArray) - 1;
    while($left <= $right) {
      $middle = (int)(($left + $right) / 2);
      if($anArray[$middle] === $element) {
        return $middle;
      }
      else if($element > $anArray[$middle]) {
        $left = $middle + 1;
      }
      else
      {
        $right = $middle - 1;
      }
    }
    return -1;
  }

  echo binary_search($haystack, 23) . "\n";
  echo binary_search($haystack, 400) . "\n";

?>