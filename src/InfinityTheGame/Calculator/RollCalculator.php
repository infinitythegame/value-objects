<?php
/**
 * Created by PhpStorm.
 * User: shrikeh
 * Date: 21/03/2014
 * Time: 19:16
 */ 
namespace InfinityTheGame\Calculator;

use InfinityTheGame\Stat\UnitStat;

interface RollCalculator
{
    public function calculate(UnitStat $stat);
}
