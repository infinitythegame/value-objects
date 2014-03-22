<?php
/**
 * Created by PhpStorm.
 * User: shrikeh
 * Date: 22/03/2014
 * Time: 00:06
 */ 
namespace InfinityTheGame\Unit;

class Type
{
    private $name;

    public function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCode()
    {
        return $this->code;
    }
}
