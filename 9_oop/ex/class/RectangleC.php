<?php

class Rectangle
{
private float $sideA;
private float $sideB;

    public function __construct($sideA,$sideB)
    {
        $this->sideB = $sideB;
        $this->sideA = $sideA;
    }

    public function getSideA(): float
    {
        return $this->sideA;
    }


    public function getSideB(): float
    {
        return $this->sideB;
    }

    public function setSideA($sideA)
    {
        $this->sideA = $sideA;
    }

    public function setSideB($sideB)
    {
        $this->sideB = $sideB;
    }

    public function area(){
    return $this->sideA*$this->sideB;
    }

    public function square(){
        return $this->sideA*2+$this->sideB*2;
    }

    public function __destruct()
    {
        echo '<br>I\'ll be back o_O ';
    }
}