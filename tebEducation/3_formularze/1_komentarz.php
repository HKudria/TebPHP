<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!--    komentarz w HTML    -->
  </head>
  <body>
    <?php
// коментарий -> command + /
//  . kontotenacja = соеденение строки в PHP самый медленный способ
$name="Janusz";
$surname="Kowalski";
   echo "Imię"." i nazwisko: $name"." $surname";

  $text = "<br>Imię i nazwisko: ";
  $text .= $name;
  echo $text;
  $text = $surname;
  echo "<br>$text<br>";

  // , interpolacja = вывод всех данных в строке без соеденения

  echo "Imię ", "i nazwisko", $name;


     ?>
  </body>
</html>
