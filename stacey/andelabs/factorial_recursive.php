<?php
function factorialX($n){
	if($n <= 1){
		return 1;
	}
	else{
		return $n * factorialX($n - 1);
	}
}
echo factorialX(3);