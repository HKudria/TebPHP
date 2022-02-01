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
$sql = "INSERT INTO `users` (`user_id`, `city_id`, `name`, `surname`, `birthday`, `create_user`) VALUES (NULL, '$_POST[city_id]', '$_POST[name]', '$_POST[surname]', '$_POST[birthday]', current_timestamp());";
$connect->query($sql);

if($connect->affected_rows){
    $_SESSION['error'] = "Prawidlowo dodano użytkownika";
} else {
    $_SESSION['error'] = "Bląd pod czas dodawania użytkownika";
}


}
header('location: ../5_db_select_table_update.php');


?>
