<?php

interface iSay
{
    public function printSmth();
}

//abstract class, we cann't create example of this class
abstract class Product
{
    const VERSION = 1.0;
    protected $name, $price, $weight ;
    public static int $count=0;
    public static string $companyName='someCompany';
    public static int $companyCreatedYear=2015;


    public function __construct(string $name,float $price,float $weight){
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
        Product::$count++;
    }


    public function getInfo(){
        echo "This is {$this->name}, its price {$this->price}$ and weight {$this->weight}";
    }

    public function priceWithoutTax(){
        echo sprintf("This is {$this->name}, its price without tax %0.2f $ and weight {$this->weight}<hr>", $this->price/123*100 );
    }

    abstract public function showImage();

    public function __get($name){
        echo "You can not use this variable $" . $name ."<br>";
    }

    public function __set($name, $value){
        echo "You can not use this variable $" . $name ."<br>";
    }



}

class Chocolate extends Product implements iSay
{
    protected $callories;

    public function __construct(string $name, float $price, float $weight, int $callories)
    {
        $this->callories = $callories;
        parent::__construct($name, $price, $weight);
        //call function showImage when created new object
        $this->showImage();
    }

    public function setCallories($callories){
        $this->callories = $callories;
    }

    public function getCallories(){
        return $this->callories;
    }

    public function showImage()
    {
        echo "<div style='background-image: url(choco.jpg); background-size: cover; width: 200px; height: 200px;'></div>";
    }

    public function printSmth()
    {
      echo "test interface";
    }
}

class Candy extends Product
{

    public function __construct(string $name, float $price, float $weight,)
    {
        parent::__construct($name, $price, $weight);
        $this ->showImage();
    }

    public function showImage()
    {
        echo "<div style='background-image: url(candy.jpg); background-size: cover; width: 100px; height: 100px;'></div>";
    }
}

$orange = new Chocolate('orange','10','0.20',100);
$potatoes = new Candy('potatoes','7','1.20');
$potatoes1 = new Candy('potatoes','7','1.20');


//get info from static variable
echo Product::$count . "<br>";
echo Product::$companyName . "<br>";
echo Product::$companyCreatedYear . "<br>";
echo Chocolate::$companyName . "<br>";
echo Candy::$companyCreatedYear . "<br>";
echo Product::VERSION . "<br>";

$orange->setCallories(100);
echo $orange->getCallories() ."<br>";

//magic function get and set
echo $orange->abc ;
$orange->aaa=2;


//$orange->showImage();
//$potatoes->showImage();

$orange->printSmth();

