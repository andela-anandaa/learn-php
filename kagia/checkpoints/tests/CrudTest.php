<?php

/*
 * Task 2 - Implement CRUD
 *
 * In this task, you are expected to create another class/classes that
 * can add, retrieve, update and delete meanings of urban words thrown
 * in as arguments to the class functions.
 */

use Kagia\Checkpoints\Store;
use Kagia\Checkpoints\Crud;

class CrudTest extends PHPUnit_Framework_TestCase
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

    $this->crud = new Crud();
  }

  public function test_creates_and_reads()
  {

    $word = "sick";
    $description = "when something is considered impressive";
    $sample = "oh man that php app was sick!";

    $this->crud->create($word, $description, $sample);

    $result = $this->crud->read($word);

    $this->assertEquals($result, [
      'slang' => $word,
      'description' => $description,
      'sample-sentence' => $sample
    ]);
  }

  public function test_updates()
  {
    $new_description = "updated description";
    $new_sample = "updated sample";

    $this->crud->update("Tight", $new_description, $new_sample);

    $this->assertEquals($this->crud->read("Tight"), [
      "slang" => "Tight",
      "description" => $new_description,
      "sample-sentence" => $new_sample
    ]);
  }

  /**
   * @expectedException Kagia\Checkpoints\Exceptions\SlangDoesNotExistException
   */
  public function test_deletes()
  {

    $this->crud->delete("Tight");

    $this->crud->read("Tight");
  }

  /**
   * @expectedException Kagia\Checkpoints\Exceptions\SlangExistsException
   */
  public function test_cannot_update_width_create()
  {

    $this->crud->create("Tight", "", "");
  }
}