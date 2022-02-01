<?php
session_start();
//  var_dump($_SESSION);
// echo "<pre>";
// echo print_r($_SESSION);
// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane z formularza</title>
  </head>
  <body>
    <?php
    echo "<h3>Dane pobrane z formularza</h3>";
    foreach ($_SESSION['data'] as $key => $value) {
      echo "$key: $value, długość: " .strlen($value)."<br>";
    }
      echo "<hr><h3>Poprawione dane</h3>";
      require_once './functions/function.php';
      //echo show();
      // echo validateDate($_SESSION['data']['name'],5)." długość: ".strlen(utf8_decode(validateDate($_SESSION['data']['name'],5)))."<br>";
      foreach ($_SESSION['data'] as $key => $value) {
        if($key!='birthday'){
        echo "$key: ".validateDate($value, 5)."<br>";
      }else {
        echo "$key: $value <br>";
      }

      }
     ?>
  </body>
</html>
