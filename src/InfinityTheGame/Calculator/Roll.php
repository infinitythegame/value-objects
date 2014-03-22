<?php

namespace InfinityTheGame\Calculator;

use InfinityTheGame\Stat\UnitStat;

class Roll
{
    private $stat;

    public function __construct(UnitStat $stat)
    {
        $this->stat = $stat;
    }

    public function getValue()
    {
        return $this->stat->getValue();
    }
}
