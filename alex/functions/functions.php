<?php 

// Passing by reference and by value

// by value

function modify_array($array) {
	foreach ($array as $key => $value) {
		$array[$key] = "modified";
	}
}

$a = range(10, 30);

modify_array($a);

print_r($a);

// by reference

function modify_array_2(&$array) {
	foreach ($array as $key => $value) {
		$array[$key] = "modified";
	}
}

modify_array_2($a);

print_r($a);

// ANonymous Functions / Closures

$greet = function ($name) {
	return "Hello " . $name . "\n";
};

function calls_back($array, $func) {
	foreach ($array as $person) {
		echo $func($person);
	}
}

$list = ["Stacey", "Alex", "Brian", "kagia"];
calls_back($list, $greet);