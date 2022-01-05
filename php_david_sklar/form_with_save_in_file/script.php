<?php
if(!empty($_POST['name'])&&!empty($_POST['phone'])){
  $name = $_POST['name'];
  $phone = trim($_POST['phone']);
  $date = date(DATE_RFC822);
    if (preg_match("/[0-9]{9}/", $phone) == 1) {
      file_put_contents("date.txt", "$date  -  $name  -  $phone\n", FILE_APPEND);
      header("Location: index.php?result=1");
    } else {
      header("Location: index.php?result=2");
    }
  } else {
      header("Location: index.php?result=3");
}
 ?>
