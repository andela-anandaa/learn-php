<?php

$host = "localhost";
$dbname = "learn-php";
$user = "prof";
$pass = "pr0f";

try {
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
}
catch(PDOException $e) {
	echo $e->getMessage();
}


