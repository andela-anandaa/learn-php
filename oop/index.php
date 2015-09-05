<?php
include "_classes.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>OOP in PHP</title>
	</head>
	<body>
		<h1>OOP in PHP</h1>
		<h2>Class Intro</h2>
		<?php
		$me = new Person("Tony");

		if (is_a($me, "Person")) {
			echo "I'm a person <br/>";
		}

		if (property_exists($me, "name")) {
			echo "I have a name - ".$me->getName()."<br/>";
		}

		if (method_exists($me, "dance")) {
			echo "And I know how to dance <br/>";
		}
		?>

		<h2>Inheritance</h2>
		<?php
			$square = new Square();

			if (property_exists($square, "hasSides")) {
				echo "I have sides";
			}
		?>

		<h2>Overriding Parent Methods</h2>
		<?php
			$vehicle = new Vehicle();
			echo $vehicle->honk()."<br/>";

			$bicycle = new Bicycle();
			echo $bicycle->honk()."<br/>";

			echo $bicycle->drive()."<br/>";

		?>
		<h2>Using <code>const</code></h2>
		<?php
		// :: => scope resolution operator

			if (Immortal::alive) {
				echo "I live forever!";
			}
		?>

		<h2><code>static</code> Keyword</h2>
		<?php

			echo Person::greet()."<br/>";
			echo Person::$shout."<br/>";

		?>
	</body>
</html>