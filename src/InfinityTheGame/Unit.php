<?php

namespace InfinityTheGame;

use InfinityTheGame\Stat\UnitStat;
use InfinityTheGame\Unit\Classification;
use InfinityTheGame\Unit\Instruction;
use InfinityTheGame\Unit\Type;

class Unit
{
    private $name;

    private $type;

    private $classification;

    private $instruction;

    private $stats = array();

    public function __construct(
        $name,
        Type $type,
        Classification $classification,
        Instruction $instruction,
        $stats)
    {
        $this->name = $name;
        $this->type = $type;
        $this->instruction = $instruction;
        $this->classification = $classification;

        foreach($stats as $stat) {
            $this->addStat($stat);
        }
    }

    public function getStat($statCode)
    {
        return $this->stats[$statCode];
    }

    private function addStat(UnitStat $stat)
    {
        $this->stats[$stat->getCode()] = $stat;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }



    public function getClassification()
    {
        return $this->classification;
    }

    public function getInstruction()
    {
        return $this->instruction;
    }
}
