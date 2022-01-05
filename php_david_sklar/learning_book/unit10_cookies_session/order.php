<?php
session_start();
if (!empty($_GET['inco'])){
  unset($_SESSION['order']);
  header('location: ./');
  exit();
}
if(!empty($_POST)){
  foreach ($_POST as $key => $value) {
    $_SESSION['order'][$key] = $value;
  }
}

if(!empty($_SESSION['order'])){
   echo <<< ORDER
    Towar 1 - {$_SESSION['order']['towar0']} <br>
    Towar 2 - {$_SESSION['order']['towar1']}<br>
    Towar 3 - {$_SESSION['order']['towar2']} <br>
    Towar 4 - {$_SESSION['order']['towar3']} <br>
    Towar 5 - {$_SESSION['order']['towar4']} <br>
    Towar 6 - {$_SESSION['order']['towar5']} <br>
  ORDER;
}

 ?>
<a href="./">ZAMOWIC</a>
<a href="./order.php?inco=1">Wycofaj zamówienie</a>
