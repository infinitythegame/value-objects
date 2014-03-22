<?php

namespace spec\InfinityTheGame;

use \InfinityTheGame\Stat;
use \InfinityTheGame\Calculator\Roll;
use \PhpSpec\ObjectBehavior;
use \Prophecy\Argument;

class CalculatorSpec extends ObjectBehavior
{
    function it_returns_a_roll_when_no_modifiers_are_applied()
    {
        $stat = new Stat('Ballistic Skill', 'BS', 15);
        $roll = new Roll($stat);
        $this->calculate($stat)->shouldBeLike($roll);
    }

}
