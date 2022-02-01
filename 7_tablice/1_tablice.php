<?php
//tablica indeksowa
$person1 = array('Janusz','Nowak',20,10=>5);
print_r($person1);
echo "<hr>";

//tablica asocjacyjna
$car = array(
  'brand' => 'Ferrari',
  'model' => 'F430',
  'lenght' => 200,
  'price' => 1500000.5,
);
echo "<pre>";
print_r($car);
echo "</pre>";

echo gettype($car['brand'])."<br>";
echo gettype($car['lenght'])."<br>";
echo gettype($car['price']);
echo "<hr>";

//tablica wielowymiarowa

  $person = array(
    array('Jan','Nowak',173),
    array('Anna','Kowalska',160),
    array('Katarzyna','Nowak')
  );

  // echo "<pre>";
  // print_r($person);
  // echo "</pre>";

  foreach ($person as $key => $value) {
    $count = $key+1;
    echo "Tablica: $count<br>";
      // foreach ($value as $key1 => $value1) {
      //   echo "$key1: $value1<br> ";
      // }
    echo <<<PERSON
      Imię: $value[0], nazwisko: $value[1]
    PERSON;

    if (!empty($value[2])) {
      echo ", wzrost: $value[2]cm";
    }
echo "<br>";
    // code...
  }
  echo "<br>Ilość ilementów w tablice: ".count($person);
 ?>
