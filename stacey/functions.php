<?php 
// passing by value

function modify_array($array) {
	foreach ($array as $key => $value) {
		$array[$key] = "modified";
	}
}

$a = range(10, 17);
modify_array($a);
print_r($a);

// passing by reference
function modify_array_2(&$array){
	foreach ($array as $key => $value) {
		$array[$key] = "modified";
	}
}
modify_array_2($a);
print_r($a);

// Anonymous functionc/closures
$greet = function ($name) {
	return "Hello " . $name . "\n";
}; 

// a function that does something and calls back the function supplied
function calls_back($array, $func) {
	foreach ($array as $person) {
		echo $func($person);
	}
}

$list = ["Stacey", "Alex", "Brian", "Kagia"];
calls_back($list, $greet);