<?php
class Animal
{
    public $name, $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function showData(){
        return 'Imię i wiek ' . $this->name . ' ' . $this->age;
    }
}

class Snake extends Animal{
    public $venomous;

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function showData()
    {
        return '<br>Czy wąż jest jadowity:' . $this->venomous .' ' . parent::showData();
    }

}

$pies = new Animal('fafik');
echo $pies->showData();

$snake = new Snake('Snake');
$snake->venomous = 'yes';
echo $snake->showData();