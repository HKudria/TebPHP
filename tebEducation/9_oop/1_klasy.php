<?php
    class User{
        public $name, $surname;
        public int $age;



        public function __construct($name='',$surname='',$age=0)
        {
            $this->name = $name;
            $this->surname = $surname;
            $this->age = $age;
        }

        public function showData(){
            echo 'Imię: ' . $this->name . '<br>';
        }
    }

    $nowak = new User();
    $nowak->name = 'Janusz';
    $nowak->surname = 'Nowak';
    $nowak->age = 20;

    $inew = new User('Herman','Kudria','20');
    $inew -> showData();

    echo $nowak->name . '<br>';
    echo $nowak->surname . '<br>';
    echo $nowak->age . '<br>';

    $nowak->showData();