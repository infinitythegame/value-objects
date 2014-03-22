<?php
/**
 * Created by PhpStorm.
 * User: shrikeh
 * Date: 21/03/2014
 * Time: 18:32
 */ 
namespace InfinityTheGame\RollCalculator;

use InfinityTheGame\Calculator\Modifier\StatModifier;
use InfinityTheGame\Stat\UnitStat;

class Modifier implements StatModifier
{
    private $type;

    private $value;

    public function __construct($type, $value)
    {
        $this->type = $type;
        $this->value = $value;
    }

    public function modify(UnitStat $stat)
    {

    }
}
