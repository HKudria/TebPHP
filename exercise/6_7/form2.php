<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Wprowadzenie kolorów</title>
  </head>
  <body>
    <form action="script.php" method="post">
      <?php
      if (!empty($_POST)) {
       for ($i=0; $i < $_POST['ilosc'] ; $i++) {
         $count = $i + 1;
         echo "<input type=\"text\" name=\"kolor$count\" placeholder=\"Podaj kolor $count\"><br><br>";
       }
      }
       ?>
       <input type="submit" value="Zatwierdż">
    </form>
  </body>
</html>
