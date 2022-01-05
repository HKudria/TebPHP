<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP - marathon</title>
  </head>
  <body>
    <a href="./odmiana.php">odmiana</a>

    <h1>Function</h1>
    <?php
    const PI = 3.14;

//function void
    function areaCircleEcho($r){
      echo PI * $r * $r , '<br>';
    }

    areaCircleEcho(5);

//function T
    function areaCircle($r){
      return PI * $r * $r;
    }

    echo areaCircle(5) - areaCircle(2);

    echo "<br>";
    echo "<br>";

//while - max time 120s

    $i = 1;
    while ($i <= 10) {
      echo $i++;
    }

//for

    for ($i=0; $i < 10 ; $i++) {
      echo $i++;
    }


     ?>
  </body>
</html>
