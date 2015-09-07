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
  $c = range(0, 40);

  for($i = 0; $i < sizeof($a); $i++) {
      echo $a[$i]."\n";
  }

  foreach ($mix as $key => $value) {
    if(gettype($mix[$key]) === 'array') {
      echo $key . ": ";
      for($i = 0; $i < sizeof($mix[$key]); $i++) {
        echo "\t" . $mix[$key][$i] . "\n";
      }
      continue;
    }
    echo $key . ": " . $value . "\n";
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

?>