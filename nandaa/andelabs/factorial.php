<?php
function factorial($n) {
  $prod = 1;

  for ($i = 1; $i <= $n; $i++) {
    $prod = $prod * $i;
  }

  return $prod;
}

function factorialX($n) {
  if ($n <= 1) {
    return 1;
  } else {
    return $n * factorialX($n - 1);
  }
}

echo factorial(170)."\n";
echo factorial(170)."\n";
