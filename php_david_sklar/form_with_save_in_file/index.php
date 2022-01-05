<?php
$text = null;
if(!empty($_GET)){
  if($_GET['result']==1){
    $text = "Dane zostale zapisane poprawnie";
  } elseif($_GET['result']==2){
    $text = "Numer telefonu musi miescic 9 cyfr";
  } elseif($_GET['result']==3){
    $text = "Nie wypielnilesz wszstkich dannych!";
  }
};

 ?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="script.php" method="post">
      <input type="text" name="name" placeholder="Podaj imię">
      <input type="text" name="phone" placeholder="Podaj numer telefonu">
      <input type="submit" value="Wyslij">
    </form>
    <br><br>
    <?php echo $text; ?>
  </body>
</html>
