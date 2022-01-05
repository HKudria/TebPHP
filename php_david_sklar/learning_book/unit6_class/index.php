<!-- class Entree {
  public $name;
  public $ingredients = array();

  public function __construct($name, $ingredients) {
    $this->name = $name;
      if (! is_array($ingredients)) {
          throw new Exception('$ingredients must be an array');
      }
    $this->ingredients = $ingredients;
  }

  public function hasIngredient($ingredient) {
    return in_array($ingredient, $this->ingredients);
  }
}

try {
$drink = new Entree('Glass of Milk', 'milk'); if ($drink->hasIngredient('milk')) {
        print "Yummy!";
    }
} catch (Exception $e) {
print "Couldn't create the drink: " . $e->getMessage();
}

}
}

class ComboMeal extends Entree {
  public function __construct($name, $entrees) {  //конструктор класа комбомил
    parent::__construct($name, $entrees); //передаем эти параметрый в родительский конструктор
    foreach ($entrees as $entree) {
    if (! $entree instanceof Entree) { //проверка наследуеться ли переданый клас от класа Ентри
    throw new Exception('Elements of $entrees must be Entree objects'); //если класс не наследуеться выводим исключение
    }


    public function hasIngredient($ingredient) {
      foreach ($this->ingredients as $entree) {
      if ($entree->hasIngredient($ingredient)) {
      return true;
        }
      }
        return false;
       }
}


-->

<?php

/**
 *
 */
class Test
{
  private $name;
  private $surname;

  public function __construct($name, $surname)
  {
    $this->name = $name;
    $this->surname = $surname;
    echo "Parent " . $this->name . $this->surname . "<br>";
  }
}

/**
 *
 */
class classTest extends Test
{
  function __construct($name,$surname)
  {
    //parent::__construct($name,$surname); //when I do this method I don't have permision to use parrents variable in this class 
    $this->name = $name; //it is valieble class classTest
    $this->surname = $surname;
  }

  public function out()
  {
    echo $this->name;
  }
}



$stro = new classTest('For','Test');
$stro->out();

/*
1. Создайте класс Ingredient. Каждый экземпляр этого класса должен представлять отдельный ингредиент блюда, а также отслеживать наименование ингредиента и его стоимость.
2. Введите в свой новый класс Ingredient метод, изменяющий стоимость ингредиента блюда.
3. Создайте подкласс, производный от представленного в этой главе класса Entree. Этот подкласс должен принимать объекты типа Ingredient вместо символьной строки с наименованиями ингредиентов для их обозначения. Введите в этот подкласс метод, возвращающий общую стоимость блюда.
4. Разместите свой класс Ingredient в собственном пространстве имен и внесите изменения в другой код, где применяется класс Ingredient, чтобы этот код функционировал надлежащим образом.
 */
class Ingredient
{
  private $name;
  private $price;

  function __construct($name, $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function getName(){
    return $name;
  }

  public function getPrice(){
    return $price;
  }

  public function setPrice($price){
    $this->price = $price;
  }
}

class Entree {
  public $name;
  public $ingredients = array();

  public function __construct($name, $ingredients) {
    $this->name = $name;
      if (! is_array($ingredients)) {
          throw new Exception('$ingredients must be an array');
      }
    $this->ingredients = $ingredients;
  }

  public function hasIngredient($ingredient) {
    return in_array($ingredient, $this->ingredients);
  }
}

class PricedEntree extends Entree {
  public function ___construct($name, $ingredients) {
      parent::__construct($name, $ingredients);
      foreach ($this->ingredients as $ingredient) {
          if (! $ingredient instanceof Ingredient) {
              throw new Exception('Elements of $ingredients');
            }
          }
        }

public function getCost() {
  $cost = 0;
  foreach ($this->ingredients as $ingredient) {
    $cost += $ingredient->getCost();
  }
  return $cost;
  }
}



 ?>
