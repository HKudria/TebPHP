<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane rodżiny</title>
    <link rel="stylesheet" href="./css/master.css">
  </head>
  <body>
    <h3>Podaj ilość osób w rodżinie</h3>
    <form method="post">
      <input type="number" name="countFamily" value="" placeholder="Wprowadż liczbe">
      <input type="submit" value="Zatwierdż">
    </form>

    <?php
//sprawdzamy jezeli dane wprowadzono z blędem to dajemy taką samą ilość form
    if (isset($_SESSION['count'])) {
      $_POST['countFamily'] = $_SESSION['count'];
      unset($_SESSION['count']);
    }

//jezeli pole countFamily wprowadzono to jazda
    if (!empty($_POST)){
      if(isset($_POST['countFamily'])&&$_POST['countFamily']>0){
        $count = $_POST['countFamily'];
        echo "<form action=\"script.php\" method=\"post\">";
          for ($i=0; $i < $count; $i++) {
        $iForOut = $i+1;
      ?>
          <h4>Podaj dane osoby #<?php echo $iForOut++; ?></h4>
          <input type="text" name="<?php echo $i; ?>[name]" value=""><br>
          <input type="text" name="<?php echo $i; ?>[surname]" value=""><br>
          <input type="text" name="<?php echo $i; ?>[height]" value=""><br><br>
      <?php

      }
      echo "<input type=\"submit\" value=\"Zatwierd\">";
      echo "</form>";
    } else {
        $_SESSION['error'] = "Wypełnij formularz!";
    }
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    }

    //blędy z różnych stron
    echo "<br>";
    if (isset($_SESSION['error'])) {
      echo "<h2>$_SESSION[error]</h2>";
      unset($_SESSION['error']);
    }

    ?>
  </body>
</html>
