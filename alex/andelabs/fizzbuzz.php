<?php

function fizz_buzz($n) {
	for ($i = 1; $i < $n ; $i++) { 
		if ($i % 3 == 0 && $i % 5 == 0) {
			echo  $i . " : FizzBuzz\n";
		} else if ($i % 5 == 0) {
			echo $i ." : Buzz\n";
		} else if ($i % 3 == 0) {
			echo $i ." : Fizz\n";
		}
		else {
			echo $i . "\n";
		}
	}
}
fizz_buzz(23);