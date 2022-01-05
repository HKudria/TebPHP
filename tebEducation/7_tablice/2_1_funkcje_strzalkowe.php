<h4>Funkcje strzalkowe</h4>
<?php

  function cube($n)
  {
    return ($n*$n*$n);
  }

  $age=[1,2,3,4,5,6];
  $b = array_map('cube', $age);
  print_r($b);

//################################

  function validateName($name)
  {
    return ucfirst(strtolower(trim($name)));
  }

  $names=['januSZ','aGniESZka','MicHAl'];
  $validateNames = array_map('validateName',$names);
  echo "<pre>";
  echo print_r($validateNames);
  echo "</pre>";

  //##############################
  //Funkja anonimowa pelna
  $salary = [3500,7700,2800,12000];
  $salaryIncrease = array_map(function($salary){
    return $salary*1.15;
  },$salary);
  echo "<pre>";
  echo print_r($salaryIncrease);
  echo "</pre>";

//################################
//Funkcja anonimowa strzalkowa
  $salary = [3500,7700,2800,12000];
  $salaryIncrease = array_map(fn($salary)=>$salary*1.15,$salary);
  echo "<pre>";
  echo print_r($salaryIncrease);
  echo "</pre>";

  //################################
  //Funkcja anonimowa strzalkowa
    $salary = [3500,7700,2800,12000];
    $salaryIncrease = array_map(fn($salary):float=>$salary*1.15,$salary);
    echo "<pre>";
    echo print_r($salaryIncrease);
    echo "</pre>";
 ?>
