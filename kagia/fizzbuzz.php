<?php

function FizzBuzz($n)
{
  for ($i = 0; $i < $n; $i++)
  {
    if ($i % 3 == 0 && $i % 5 == 0)
    {
      echo $i . " :FizzBuzz\n";
    } elseif ($i % 3 == 0) {
      echo $i . " :Fizz\n";
    } else if ($i % 5 == 0) {
      echo $i . " :Buzz\n";
    }
  }
}

FizzBuzz(20);