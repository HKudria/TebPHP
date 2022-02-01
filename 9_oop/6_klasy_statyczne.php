<?php
class Number
{
    public static $number=10;

    public static function showNumber(){
        echo 'It\'s static function: '. Number::$number;
    }
}

    echo Number::$number.'<br>';
    Number::showNumber();