<?php

abstract class Animal
{
    protected float $masa, $wiek;

    public function patrz(){
        echo 'patrz<br>';
    }
    public function oddychaj(){
        echo 'oddychaj<br>';
    }

    public function __construct($masa, $wiek)
    {
        $this->masa = $masa;
        $this->wiek = $wiek;
    }

}

class Fish extends Animal
{
    protected string $place;

    public function __construct($masa, $wiek, $place)
    {
        parent::__construct($masa,$wiek);
        $this->place=$place;
    }

    public function plyn(){
        echo 'plyn<br>';
    }
}

class Mammal extends Animal
{
    public function biegnij(){
        echo 'biegnij<br>';
    }
}

class Bird extends Animal
{
    public function lec(){
        echo 'lec<br>';
    }
}

class Dog extends Mammal
{
    protected string $rasa, $woolColor;

    public function szczekaj(){
        echo 'szczekaj<br>';
    }

    public function aportuj(){
        echo 'aportuj<br>';
    }

    public function __construct($masa,$wiek,$rasa,$woolColor)
    {
        parent::__construct($masa,$wiek);
        $this->rasa = $rasa;
        $this->woolColor = $woolColor;

        echo "Hello I'm a $this->rasa dog and my wool colour is $this->woolColor. My weight is $this->masa and I'm $this->wiek years old.<br>";
    }
}

$pies = new Dog('20','10','mini','blue');
echo 'I can do follow things:<br>';

foreach (get_class_methods($pies) as $method){
    if($method != '__construct')
    {
        echo $pies->{$method}();
    }
}
