<?php

function factorial($param){
	$product = 1;

	for($i = 1; $i <= $param; $i++){
		$product = $product * $i;
	}

	return $product;
}

echo factorial(2). "\n";