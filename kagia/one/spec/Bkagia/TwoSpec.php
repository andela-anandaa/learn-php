<?php

namespace spec\Bkagia;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TwoSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Bkagia\Two');
    }

    function it_can_create_and_read()
    {
      $slang = "tight";
      $description = "when something is awesome";
      $sample = "man that song is tight";

      $this->create($slang, $description, $sample);

      $this->read($slang)->shouldReturn([
          'description' => $description,
          'sample' => $sample
      ]);
    }

    function it_can_update()
    {
      $slang = "tight";
      $description = "when something is awesome";
      $sample = "man that song is tight";

      $other_sample = "your game is tight";

      $this->create($slang, $description, $sample);
      $this->update($slang, $description, $other_sample);

      $this->read($slang)->shouldReturn([
        'description' => $description,
        'sample'=> $other_sample
      ]);
    }

    function it_can_delete()
    {
      $slang = "tight";
      $description = "when something is awesome";
      $sample = "man that song is tight";

      $this->create($slang, $description, $sample);
      $this->delete($slang);

      $this->read($slang)->shouldReturn(null);
    }
}
