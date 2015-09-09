<?php

$host = "localhost";
$dbname = "learn-php";
$user = "andela";
$pass = "andela";

try {
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
}
catch(PDOException $e) {
	echo $e->getMessage();
}
