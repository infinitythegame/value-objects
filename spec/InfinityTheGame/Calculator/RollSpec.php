<?php

namespace spec\InfinityTheGame\Calculator;

use \InfinityTheGame\Stat;
use \PhpSpec\ObjectBehavior;
use \Prophecy\Argument;

class RollSpec extends ObjectBehavior
{
    function it_returns_the_unmodified_roll_value()
    {
        $stat = new Stat('BS', 12);
        $this->beConstructedWith($stat);
        $this->getValue()->shouldReturn(12);
    }
}
