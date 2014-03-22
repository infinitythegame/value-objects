<?php

namespace spec\InfinityTheGame;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FigureSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('InfinityTheGame\Figure');
    }
}
