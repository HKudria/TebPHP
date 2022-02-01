<?php
interface PersonalInterface
{
    public function getName():string;
    public function setName($name);
    public function getSurname():string;
    public function setSurname($surname);
    public function getAdress():string;
    public function setAdress($adress);
}

interface UserInterface
{
    public function getLogin():string;
    public function setLogin($login);
}

class Person implements PersonalInterface, UserInterface
{
    protected string $name='', $surname='', $adress='',$login='';
    public function getName() : string
    {
       return $this->name;
    }

    public function setName($name)
    {
        $this->name=$name;
    }

    public function getSurname() : string
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname=$surname;
    }

    public function getAdress() : string
    {
        return $this->adress;
    }

    public function setAdress($adress)
    {
        $this->adress=$adress;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

}

$nowak = new Person();
$nowak->setName('Janusz');
echo $nowak->getName().'<br>';
$nowak->setLogin('Tajny');
echo $nowak->getLogin();