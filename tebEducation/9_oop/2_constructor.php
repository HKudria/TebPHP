<?php

class Person
{
    public $name, $surname, $city;

    public function __construct($name,$surname=null,$city='TEST CITY')
    {
      $this->name = $name;
      $this->surname = $surname;
      $this->city = $city;
    }

    public function showData(){
        return "Imię i nazwisko: $this->name $this->surname <br>Miasto: $this->city<br><hr>";
    }
}

$kowalski = new Person('Jan','Kowalski','Poznan');
echo $kowalski->showData();

$kowalski2 = new Person('Jan',);
echo $kowalski2->showData();

$kowalski3 = new Person('Jan','Kowalski','Poznan');
echo $kowalski3->showData();
