<?php
  session_start();

  // echo "<pre>";
  // print_r($_POST);
  // echo "</pre>";
  //jeżeli dane wprowadzone to jazda
  if (!empty($_POST)) {
    //sprawdzamy na puste pole
    foreach ($_POST as $key => $value) {
      foreach ($value as $memberDate) {
        if(empty(trim($memberDate))){
          $_SESSION['error'] = "Wypełnij wszystkie pola!";
          $_SESSION['count'] = count($_POST);
          header('location: ./index.php');
          exit();
        }
      }
    }
    //sukces zapisujemy SESSION
    foreach ($_POST as $key => $value) {
      $_SESSION['rodzina']['member'.$key]=$value;
    }
    // echo "<pre>";
    // print_r($_SESSION);
    // echo "</pre>";
    header('location: ./result.php');
  } else {
    $_SESSION['error'] = "Wypełnij formularz!";
    header('location: ./index.php');
 }
?>
