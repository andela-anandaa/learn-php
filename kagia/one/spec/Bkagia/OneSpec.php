<?php

namespace spec\Bkagia;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OneSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Bkagia\One');
    }
}
