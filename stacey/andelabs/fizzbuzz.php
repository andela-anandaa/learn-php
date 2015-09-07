<?php
	function fizz_buzz($number){
		for($i = 1; $i < $number; $i++){
			if(($i % 3) == 0){
				if(($i % 5) == 0){
					echo $i.": FizzBuzz \n";
				}
				else {
					echo $i.": Fizz \n";
				}
			}
			else if (($i % 5) == 0){
				echo $i.":Buzz \n";
			}
			else {
				echo $i.":number \n";
			}
		}
	}

fizz_buzz(20);