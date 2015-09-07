<?php 

// normal array

$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// short array syntax
$z = [3, 5, 7, 89];

$mix = array(10, "apples", "mangoes",
	         array(1, 3, 10), 35.3);

$b = range(0, 11);

// matrix
$matrix = [
	[10, 30, 50],
	[10, 5, 90],
	[200, 34, 89]
];
// generate alphabet with range function
$chars = range("a", "m");
print_r($chars);

for ($i = 0; $i < sizeof($b) ; $i++) { 
	echo $a[$i]."\n";
}

$transformed = [];

for ($i = 0, $len = sizeof($matrix); $i <$len; $i++) { 
	$sum = 0;
	for ($j=0, $innerLen = sizeof($matrix[$i]); $j < $innerLen; $j++) { 
		$sum += $matrix[$i][$j];
	}
	$transformed[$i] = $sum;
}
var_dump($transformed);

foreach ($mix as $item) {
	print_r($item);
	echo "\n";
}

// associative array
$ar = [
	"kagia" => ["C++", "JS", "PHP", "Python"],
	"Stacey" => ["C", "Javascript", "GO", "C++"],
	"Alex" => ["Python", "PHP", "Perl", "C"],
	"Brian" => ["Go", "python", "RUby", "C"]
];

foreach ($ar as $key => $value) {
	echo $key. " : " . sizeof($value) . "\n";
}



// binary search


if (!function_exists("binary_search")) {
	function binary_search($array, $item) {
	$l = 0;
	$u = count($array) - 1;
	while ($l <= $u) {
		$m = floor(($u + $l) / 2);
		if ($array[$m] == $item) {
			return $m;
		} else {
			if ($array[$m] > $item) {
				$u = $m - 1;
			} else {
				$l = $m + 1;
			}
		}
	}

	return -1;
	}
}
$haystack = range(10, 45);
echo binary_search($haystack, 100) . "\n";