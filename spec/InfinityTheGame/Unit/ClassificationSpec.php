<?php

namespace spec\InfinityTheGame\Unit;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ClassificationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('InfinityTheGame\Unit\Classification');
    }
}
