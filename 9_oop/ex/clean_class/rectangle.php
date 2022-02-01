<?php
class Rectangle{
    public $a,$b;

    public function __construct($a,$b)
    {
        $this->a=$a;
        $this->b=$b;
    }

    public function area(){
        return $this->a*2 + $this->b*2;
    }
}