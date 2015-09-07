<?php
  // Array Map and Array reduce
  $numberRange = range(2, 6);

  function square_number($i) {
    return $i * $i;
  }

  $mapped_array = array_map("square_number", $numberRange);

  print_r($mapped_array);

  function sum_numbers($sum, $i) {
    return $sum + $i;
  }

  $reduced_array = array_reduce($numberRange, "sum_numbers");

  print_r($reduced_array . "\n");

  // Array slicing and splicing

  $simpleArray = range(0, 10);

  print_r(array_slice($simpleArray, 2, 4));

?>