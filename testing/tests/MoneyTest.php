<?php

use PHPUnit_Framework_TestCase as TestCase;

class MoneyTest extends TestCase {
	public function testCanBeNegative() {
		// arrange
		$a = new Money(1);

		// act
		$b = $a->negate();

		// assert
		$this->assertEquals(-1, $b->getAmount());
	}
}