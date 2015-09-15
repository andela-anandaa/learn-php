<?php
/*
 * Task 3 - Implement Ranking System
 *
 * In this task, you are required to create a class that
 * can group the same words according to the number of
 * occurrences. From the sample sentence, categorize each
 * word according to the number of occurrences.
 */

use Kagia\Checkpoints\Grouper;

class GrouperTest extends PHPUnit_Framework_TestCase
{
  public function test_groups_by_count()
  {
    $sentence = "Andrei: Prosper, Have you finished the curriculum?. Prosper: Yes. Andrei: Tight, Tight, Tight!!!";

    $result = Grouper::groupByCount($sentence);

    $this->assertEquals($result, [
      "Andrei" => 2,
      "Tight" => 3,
      "Prosper" => 2,
      "Yes" => 1,
      "Have" => 1,
      "you" => 1,
      "finished" => 1,
      "the" => 1,
      "curriculum" => 1
    ]);
  }
}