<?php

/**
* Task 1 - Create Data Array
* In this task, you are expected to create a class that possess a static associative array that contains urban words.
* 
* Example:
*  The associative array will look like so:
*   $data = [
*     “slang” => “Tight”,
*     “description” => “When someone performs an awesome task”,
*     “sample-sentence” => “Andrei: Prosper, Have you finished the curriculum?.\nProsper: Yes.\nAndrei: Tight, Tight, Tight!!!”
*   ];
**/

use Kagia\Checkpoints\Store;

class StackTest extends PHPUnit_Framework_TestCase
{
  public function setUp()
  {
    Store::$data = [
      "Tight" => [
        "slang" => "Tight",
        "description" => "When someone performs an awesome task",
        "sample-sentence" => "Andrei: Prosper, Have you finished the curriculum?.\nProsper: Yes.\nAndrei: Tight, Tight, Tight!!!"
      ]
    ];
  }

  public function testHasStaticDataField()
  {

    $this->assertEquals(Store::$data, [
      "Tight" => [
        "slang" => "Tight",
        "description" => "When someone performs an awesome task",
        "sample-sentence" => "Andrei: Prosper, Have you finished the curriculum?.\nProsper: Yes.\nAndrei: Tight, Tight, Tight!!!"
      ]
    ]);
  }
}