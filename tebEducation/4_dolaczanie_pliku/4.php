<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strona Główna</title>
  </head>
  <body>
  <h3>Strona Głównawb</h3>
  Początek strony <br>
<?php
    include 'new.php'; //добавляет файл если адрес не верный ошибка но дальше код работает
    include_once 'new.php'; //добавляет файл один раз во всем документе если адрес не верный ошибка но дальше код работает
    require 'new.php'; //добавляет файл если адрес не верный ошибка дальше код не работает
    require_once 'new.php'; //добавляет файл один раз во всем документе если адрес дальше код не работает
    include './scripts/test.php'; //добавление файла с корневого каталога
 ?>
  Koniec strony <br>
  </body>
</html>
