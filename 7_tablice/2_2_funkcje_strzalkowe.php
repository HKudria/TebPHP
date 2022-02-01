<?php
  function childName(){
    return 'Franek';
  }

  print_r(childName());
  echo "<br>";
  var_dump(childName());
  echo "<br>";

  $childs = [
    ['id' => '1', 'name' => 'Franek'],
    ['id' => '2', 'name' => 'Jagoda'],
  ];

  $validateChildNames = array_map(function($child){
    return $child;
  },$childs);

  echo "<pre>";
  print_r($validateChildNames);
  echo "</pre><hr>";

  ######################################

  $name = function(){
    return 'Franek';
  };
  var_dump($name());

  ######################################

  echo "<br>";
  $name = fn () => 'Franek';
  var_dump($name());

  ######################################

  echo "<br>";
  $multi = fn ($a, $b) => $a*$b;
  var_dump($multi(4,5));
  echo "<br>";
  var_dump($multi(4.5,5));

  ######################################

  $fruits = [
    ['name' => 'apple', 'price' => 6],
    ['name' => 'lemon', 'price' => 10.5]
  ];

  $sale = array_map(function($fruit){
    return $fruit['name'];
  }, $fruits);

  echo "<br>";
  print_r($sale);


  ######################################

  $sale = array_map(fn($fruit) => $fruit['name'], $fruits);

  echo "<br>";
  print_r($sale);

  ######################################

  // $name = "adam";
  // $split = str_split($name);
  //
  // $result = array_map(function($char){
  //   return ['char' => $char];
  // },array_unique($split));
  //
  // echo "<br><pre>";
  //
  // print_r($result);
  // echo "</pre>"

  ######################################

  // $name = "adam";
  // $split = str_split($name);
  //
  // $result = array_map(function($char, $count){
  //   return [
  //     'char' => $char,
  //     'occurs' => $count
  //   ];
  // },array_unique($split), array_count_values($split));
  //
  // echo "<br><pre>";
  //
  // print_r($result);
  // echo "</pre>"

#######################################################

  $name = "adam";
  $split = str_split($name);

  $result = array_map(fn($char, $count) => ['char' => $char,'occurs' => $count]
  ,array_unique($split), array_count_values($split));

  echo "<br><pre>";

  print_r($result);
  echo "</pre><br>";

  #####################################################

  $user = ['name' => 'Franek'];
  //$user = ' ';
  //$user = trim($user);

  // $result = function() use ($user){
  //   if(!$user){
  //     return 'brak danych!';
  //   }
  //   return 'Witaj '. $user['name'];
  // };

  $result = fn() => !$user ? 'brak danych!' : 'Witaj '. $user['name'];



  print_r($result());
 ?>
