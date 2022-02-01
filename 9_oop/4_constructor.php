<?php
class A
{
    public function __construct()
    {
        echo 'Konstruktor klasy A<br>';
    }
}

class B extends A
{
    public function __construct()
    {
        echo 'Konstruktor klasy B<br>';
    }

}

$objA = new A();
$objB = new B();