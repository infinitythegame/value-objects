<?php

namespace InfinityTheGame;

use InfinityTheGame\Calculator\Roll;
use InfinityTheGame\Calculator\RollCalculator;
use InfinityTheGame\Stat\UnitStat;

class Calculator implements RollCalculator
{
    public function calculate(UnitStat $stat)
    {
        return new Roll($stat);
    }
}
