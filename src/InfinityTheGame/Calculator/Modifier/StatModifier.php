<?php
/**
 * Created by PhpStorm.
 * User: shrikeh
 * Date: 21/03/2014
 * Time: 18:47
 */ 
namespace InfinityTheGame\Calculator\Modifier;

use InfinityTheGame\Stat\UnitStat;

interface StatModifier
{
    public function modify(UnitStat $stat);
}
