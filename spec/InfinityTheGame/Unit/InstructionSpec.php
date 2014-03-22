<?php

namespace spec\InfinityTheGame\Unit;

use \InfinityTheGame\Unit\Instruction;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InstructionSpec extends ObjectBehavior
{
    function it_gives_me_the_type_of_instruction()
    {

        $this->beConstructedWith(Instruction::REGULAR);
        $this->getValue()->shouldReturn(Instruction::REGULAR);
    }
}
