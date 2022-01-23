<!--
    Utwórz klasę abstrakcyjną o nazwie figura geometryczna
    Zdefiniuj w tej klasie licznik utworzonych figur (static)
    Dodaj w niej konstructor i destructor
    Dodaj metody abstrakcyjne: pole, obwód, rysuj

    Dodaj klasę dziedziczącą po klasie figura geometryczna
    Wywolaj metode unset, która usunie obiekt



-->
<?php

abstract class GeometricFigure
{
    public static $count=0;
    public function __construct()
    {
        GeometricFigure::$count++;
    }

    public function __destruct()
    {
       echo 'Kill ' . get_class($this) . '<br>';
    }

    public abstract function area();
    public abstract function perimetr();
    public abstract function draw();
}

class Circle extends GeometricFigure
{
    public function area()
    {
        echo 'area '.get_class($this). '<br>';
    }

    public function perimetr()
    {
        echo 'square '.get_class($this) . '<br>';
    }

    public function draw()
    {
       echo 'draw '.get_class($this). '<br>';
    }

}


$obj = new Circle();
$obj1 = new Circle();
$obj2 = new Circle();
echo 'How many figure was created ' . GeometricFigure::$count . '<br>';
unset($obj);



