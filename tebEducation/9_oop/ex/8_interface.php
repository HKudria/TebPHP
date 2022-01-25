<!--
    Utwórz klasę abstrakcyjną o nazwie figura geometryczna
    Zdefiniuj w tej klasie licznik utworzonych figur (static)
    Dodaj w niej konstructor i destructor
    Dodaj metody abstrakcyjne: pole, obwód, rysuj

    Dodaj klasę dziedziczącą po klasie figura geometryczna
    Wywolaj metode unset, która usunie obiekt



-->
<?php

interface Calculation
{
    public function area() : float;
    public function circuit() : float;
}

abstract class GeometricFigure implements Calculation
{
    private static int $count=0;
    private static int $countDestroy=0;
    public function __construct()
    {
        self::$count++;
        echo 'Created object of class : '. get_class($this). ' Was all created: ' . self::$count .'<br>';
    }
    public static function getCount(): int
    {
        return self::$count;
    }
    public function __destruct()
    {
        self::$countDestroy++;
        echo 'Destroyed object of class : '. get_class($this). ' Was all destroyed: ' . self::$countDestroy.'<br>' ;
    }


    public function draw()
    {
        echo 'draw '.get_class($this). '<br>';
    }
}

class Circle extends GeometricFigure
{
    protected float $radius;

    public function __construct($radius)
    {
        parent::__construct();
        $this->radius = $radius;
    }

    public function area() : float
    {
       return pow($this->radius,2) * pi();
    }

    public function circuit() : float
    {
        return $this->radius * pi() * 2;
    }

}

class Rectangle extends GeometricFigure
{
    protected float $width, $height;

    public function __construct($width,$height)
    {
        parent::__construct();
        $this->width = $width;
        $this->height = $height;
    }

    public function area() : float
    {
        return $this->width * $this->height;
    }

    public function circuit() : float
    {
        return ($this->width + $this->height)*2;
    }

}


$obj = new Circle(5);
$obj1 = new Circle(4);
$obj2 = new Circle(3);
$obj3 = new Rectangle(2,5);
unset($obj); //kill object
echo 'How many figure was created ' . GeometricFigure::getCount() . '<br>';
echo sprintf('Circuit: %.2f <br>',$obj1->circuit()) ; //we can use function round($variable,num) or number_format($variable,num)
echo sprintf('Area: %.2f <br>',$obj1->area()) ;
echo round($obj1->circuit(),2) . 'cm<br>';
echo number_format($obj1->area(),2,',').'cm<br>';
echo 'Rectangle: ';
echo $obj3->area(). 'cm | ';
echo $obj3->circuit(). 'cm<sup>2</sup><br>';



