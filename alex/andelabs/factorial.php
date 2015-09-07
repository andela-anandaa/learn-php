<?php

function factorial($n) {
	$prod = 1;

	for($i = 1; $i <= $n; $i++) {
		$prod = $prod * $i;
	}
	return $prod;
}
function fibonacci($n) {
	if ($n < 2) {
		return $n;
	} else {
		return( fibonacci($n - 1) + fibonacci($n - 2));
	}
}
function factorialX($n) {
	if ($n <= 1) {
		return 1;
	} else {
		return $n * factorialX($n - 1);
	}
}
echo factorial(4)."\n";
echo fibonacci(3)."\n";
echo factorialX(200)."\n";
    