<?php
$colors = array();
  if(!empty($_POST)){
  foreach ($_POST as $key => $value) {
    if(!empty($value)){
      array_push($colors, $value);
    }

  }
// echo "<pre>";
//  print_r($colors);
//  echo "</pre><br>";

  $arraySmall = array_map(fn($color)=>strtolower(trim($color)),$colors);


  // echo "<pre>";
  //  print_r($arraySmall);
  //  echo "</pre><br>";
  asort($arraySmall,SORT_STRING);
  // echo "<pre>";
  //  print_r($arraySmall);
  //  echo "</pre><br>";
  $count = 1;
  echo "Ilość ulublionych kolorów:" .count($arraySmall)."<br>";
  foreach ($arraySmall as $key => $value) {

    echo "Kolor $count: $value <br>";
    $count++;
  }
}
 ?>
