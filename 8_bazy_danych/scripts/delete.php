
<?php
  session_start();

if (!empty($_GET['deleteId'])){
  require_once './connect.php';
  $sql = "DELETE FROM `users` WHERE `users`.`user_id` = $_GET[deleteId];";
  //$sql = "DELETE FROM `users` WHERE `users`.`user_id` = -1";
  $result = $connect->query($sql);
  if ($connect->affected_rows){
    $_SESSION['aRow'] = $connect->affected_rows;
    $_SESSION['id'] = $_GET['deleteId'];
  } else {
    $_SESSION['aRow'] = -1;
  }
}
  header('location: ../5_db_select_table_update.php');


 ?>
