<?php 
// normal array
$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// mix aray
$mix = array(10, "apples", " mangoes", 
			array(1, 3, 10), 35.3);

/* another way of creating an array that 
 starts counting from 0 to 10, using range() */
$b = range(0, 11);

// short arrray syntax
$c = [10, 40, 20, 45];

// matrix
$matrix = [
	[10, 30, 50],
	[10, 3, 50],
	[6, 10, 12]
];

// generate alphabet with range() function
$chars = range("a", "m");
print_r($chars);

// print b

for ($i = 0; $i < sizeof($b); $i++){
	echo $b[$i]."\n";
}

$transformed = [];
// print the transformed matrix
for ($i = 0, $len = sizeof($matrix); $i < $len; $i++){
	$sum = 0;
	for ($j = 0, $innerLen = sizeof($matrix[$i]); $j < $innerLen; $j++){
		$sum = $sum + $matrix[$i][$j];
	}
	$transformed[$i] = $sum;

	//array_push($transformed, $sum);
}
var_dump($transformed);
print_r($transformed);

// print the mixed array
foreach ($mix as $item ) {
	print_r($item);
	echo "\n";
}

// associative array
$ar  = array(
	"Kagia" => ["C++", "JavaScript", "Python", "PHP"],
	"Stacey" => ["C", "JavaScript", "PHP"],
	"Alex" => ["C", "JavaScript", "Python"],
	"Brian" => ["C++", "JavaScript", "Python", "PHP"]
	);

// accessing items in the ar array
foreach ($ar as $key => $value) {
	echo $key. ":". sizeof($value). "\n";
}

// binary search function
if (!function_exists("binary_search")) {
	function binary_search($array, $item){
	$lower = 0;
    $upper = count($array) - 1;
    while ($lower <= $upper) {
    	$mid = floor(($upper +$lower) / 2);
    	if ($array[$mid] == $item) {
    		return $mid;
    	}
    	else if($array[$mid] > $item){
    			$upper = $mid -1;
    	} 
    	else {
    			$lower = $mid + 1;
    	}
    }

    return -1;
}
}

$haystack = range(10, 45);
echo binary_search($haystack, 33) ."\n";
