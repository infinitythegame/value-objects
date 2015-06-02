<?php

namespace spec\InfinityTheGame\Core\Order;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use \InfinityTheGame\Core\Order\Skill\Label;

class SkillSpec extends ObjectBehavior
{
    function it_has_a_name() {
        $name = 'Idle';
        $this->beConstructedWith($name);
        $this->name()->shouldReturn($name);
    }

    function it_returns_its_name_when_it_is_to_stringed()
    {
        $name = 'Idle';
        $this->beConstructedWith($name);
        $this->__toString()->shouldReturn($name);
    }

    function it_gives_me_what_labels_it_has(Label $label)
    {
        $labels = new \ArrayObject(array($label->getWrappedObject()));
        $this->beConstructedWith('Idle', $labels);
        $this->labels()->shouldBeLike($labels);
    }

    function it_validates_the_labels_i_give_it() {
        $badLabel = new \stdClass;
        $labels = new \ArrayObject(array($badLabel));
        $this->shouldThrow('\InvalidArgumentException')->during('__construct', array('Idle', $labels));
    }
}
