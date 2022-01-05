<?php
session_start();

if (!empty($_POST)){

foreach ($_POST as $key => $value) {
  if (empty($value)) {
  $_SESSION['error'] = "wypelnij wszystki danne w formulażu";
  echo "<script>history.back()</script>";
  exit();
  }
}

require_once './connect.php';
$sql = "UPDATE `users` SET `city_id` = '$_POST[city_id]', `name` = '$_POST[name]', `surname` = '$_POST[surname]', `birthday` = '$_POST[birthday]' WHERE `users`.`user_id` = '$_POST[user_id]'; ";
$connect->query($sql);

if($connect->affected_rows){
    $_SESSION['error'] = "Prawidlowo zmieniono danne użytkownika";
} else {
    $_SESSION['error'] = "Bląd pod czas zmiany dannych użytkownika";
}


}
header('location: ../5_db_select_table_update.php');


?>
