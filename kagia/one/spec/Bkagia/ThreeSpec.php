<?php

namespace spec\Bkagia;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ThreeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Bkagia\Three');
    }

    function it_can_count_words()
    {
      $sentence = "Hey man you know I thought I saw you at the zoo";
      $this->count_words($sentence)->shouldReturn([
        "Hey" => 1,
        "man" => 1,
        "you" => 2,
        "know" => 1,
        "I" => 2,
        "thought" => 1,
        "saw" => 1,
        "at" => 1,
        "the" => 1,
        "zoo" => 1
      ]);

    }
}
