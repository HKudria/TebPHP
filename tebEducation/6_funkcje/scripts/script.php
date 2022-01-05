<?php
  session_start();

  //var_dump($_POST);
  if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
      if(empty($value)){
        $_SESSION['error'] = "Wypełnij wszystkie pola!";
        header('location: ../5_1_function_form.php');
        exit();
      }
    }
    foreach ($_POST as $key => $value) {
      $_SESSION['data'][$key]=$value;
    }
      header('location: ../5_1_result.php');
  } else {
    $_SESSION['error'] = "Wypełnij formularz!";
    header('location: ../5_1_function_form.php');
 }
?>
