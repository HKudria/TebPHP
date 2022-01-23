<?php

abstract class Vechile
{
    protected string $brand, $model, $owner='';
    public abstract function hunk();

    public function setOwner(string $owner): void
    {
        $this->owner = $owner;
    }

    public function __construct($brand,$model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }
}

class Car extends Vechile
{

    public function hunk()
    {
        echo "I am $this->brand $this->model do car hunk<br>";
    }

}

class Boat extends Vechile
{

    public function hunk()
    {
        echo "I am $this->brand $this->model do boat hunk<br>";
    }
}

//$obj = new Vechile() //it'll be error because class is abstract
$car = new Car('BMW','7');
$car->hunk();

$boat = new Boat('Yamacha','new-model');
$boat->hunk();

