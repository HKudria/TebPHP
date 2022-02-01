<?php
class Person{
    public $publiczna='public<br>';
    protected $chroniona='protected<br>';
    private $pryvatna='private<br>';

    public function getChroniona()
    {
        return $this->chroniona;
    }

    public function getPryvatna()
    {
        return $this->pryvatna;
    }

    public function setChroniona($chroniona)
    {
        $this->chroniona = $chroniona;
    }

    public function setPryvatna($pryvatna)
    {
        $this->pryvatna = $pryvatna;
    }
}

class Child extends Person{
    public function pokazChroniona(){
        echo $this->chroniona;
    }
}

    $obj = new Person();
    echo $obj->publiczna;
    //echo $obj->chroniona; //fatal error
    echo $obj->getChroniona();
    //echo $obj->pryvatna; //fatal error
    echo $obj->getPryvatna();

    $obj->setChroniona('I\'m new protected variable<br>');
    $obj->setPryvatna('I\'m new private variable');
    echo $obj->getChroniona();
    echo $obj->getPryvatna();

    $childObj = new Child();
    echo $childObj->publiczna;
    echo $childObj->pokazChroniona();
