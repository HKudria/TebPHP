<?php
class Zwierze
{
    protected float $masa, $wiek;

    public function patrz(){
        echo 'patrz<br>';
    }
    public function oddychaj(){
        echo 'patrz<br>';
    }
}

class Ryba extends Zwierze
{
    public function plyn(){
        echo 'plyn<br>';
    }
}

class Ssak extends Zwierze
{
    public function biegnij(){
        echo 'biegnij<br>';
    }
}

class Ptak extends Zwierze
{
    public function lec(){
        echo 'lec<br>';
    }
}

class PiesDomowy extends Ssak
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
        $this->masa = $masa;
        $this->wiek = $wiek;
        $this->rasa = $rasa;
        $this->woolColor = $woolColor;

        echo "Hello I'm a $this->rasa dog and my wool colour is $this->woolColor. My weight is $this->masa and I'm $this->wiek years old.<br>";
    }
}

$pies = new PiesDomowy('20','10','mini','blue');
echo 'I can do follow things:<br>';
$pies->aportuj();
$pies->biegnij();
$pies->oddychaj();
$pies->patrz();
$pies->szczekaj();

