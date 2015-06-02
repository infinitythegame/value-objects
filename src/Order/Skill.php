<?php

namespace InfinityTheGame\Core\Order;

use \InfinityTheGame\Core\Order\Skill\Label;

class Skill
{
    private $name;

    private $labels;

    public function __construct($name, $labels = array())
    {
        $this->name   = $name;
        $this->labels = new \ArrayObject();
        foreach ($labels as $label) {
          $this->addLabel($label);
        }
    }

    public function __toString()
    {
        return $this->name();
    }

    public function name()
    {
        return $this->name;
    }

    public function labels()
    {
        return $this->labels;
    }

    private function addLabel($label)
    {
        if (!$label instanceof Label) {
            throw new \InvalidArgumentException('Not passed a label');
        }
        $this->labels[] = $label;
    }
}
