<?php

  /*
  * Trying to prove that arrays are passed by value
  * Check whether Objects are passed by reference
  */
  $anArray = range(1, 5);


  function modifies($array) {
    for($i = 0; $i < count($array); $i++) {
      $array[$i] = 'Yeey';
    }
  }

  print_r($anArray);

  $anObject = new stdClass();
  $anObject->fname = "Brian";
  $anObject->lname = "Mosigisi";

  function changeObject($anObj) {
    $anObj->fname = "Burayan";
  }

  changeObject($anObject);
  print_r($anObject);

  // Use of the & operator to pass by reference

  function modifiesReference(&$array) {
    for($i = 0; $i < count($array); $i++) {
      $array[$i] = 'Yeey';
    }
  }

  modifiesReference($anArray);
  print_r($anArray);

  /**
  * Anonymous functions aka closures
  * They only make your code shorter @prof_nandaa
  * May be used in callbacks
  **/

  $greet = function ($name) {
    return "Hello " . $name . "\n";
  };

  function calls_back($array, $func) {
    foreach ($array as $person) {
      echo $func($person);
    }
  }

  $list = ["Stacey", "Alex", "Brian", "Kagia"];
  calls_back($list, $greet); 
?>