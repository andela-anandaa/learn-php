<?php

function modify_array($array) {
  foreach ($array as $key => $value) {
    $array[$key] = "modified";
  }
}

$a = range(10, 30);

modify_array($a);

print_r($a);

function modify_array_2(& $array) {
  foreach ($array as $key => $value) {
    $array[$key] = "modified";
  }
}

$a = range(10, 30);

modify_array_2($a);

print_r($a);



$greet = function($name) {
  return "Hello " . $name . "\n";
};

function calls_back($array, $func) {
  foreach ($array as $person) {
    echo $func($person);
  }
}

$list = ["Stacey", "Alex", "Brian", "Kagia"];

calls_back($list, $greet);