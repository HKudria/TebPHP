<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if(!empty($_POST)){
      $a = str_replace(",",".",$_POST['a']);
      $b = str_replace(",",".",$_POST['b']);

    if($a < 0 || $b < 0){
      echo "Wypelni wszystkie dane prawidłowo";
    } else {
      $ab = $a*$b;
      $obwod = 2*($a+$b);
      echo "Twoj prostokąt " , $a ," i ", $b;
      echo "<br>Pole : ", $ab, " cm<sup>2</sup> <br>";
      echo "Obwód: ", $obwod, " cm<br>";
    }
    }
     ?>
     <a href="./4_area.php">Strona Główna</a>
  </body>
</html>
