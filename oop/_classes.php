<?php
// Ideally, each class should be in it's own
// file, but this is is just for demonstration

class Person {
	public $isAlive = true;
	private $name;
	public static $shout = "Yay!";

	function __construct($name) {
		$this->name = $name;
	}

	public function dance() {
		return "I'm dancing";
	}

	public function getName() {
		return $this->name;
	}

	public static function greet() {
		return "Hello there!";
	}
}


// Inheritance

class Shape {
	public $hasSides = true;
}

class Square extends Shape {

}

class Vehicle {
	public function honk() {
		return "HONK HONK";
	}

	final public function drive() {
		return "I'm driven like this";
	}
}

class Bicycle extends Vehicle {
	public function honk() {
		return "Beep beep!";
	}

	// will give an error
	// public function drive() {
	// 	return "I'm not driven!";
	// }
}

// const
class Immortal extends Person {
	const alive = true;
}

