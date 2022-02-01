<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strona główna</title>
  </head>
  <body>
    <p>Strona główna</p>
    <?php
  $name='Janusz';
  $surname="Surname";
    echo 'imię: $name';
    echo "<br>imię: $name<hr>";

//heredoc
echo <<< LABEL
    Imię i nazwisko $name $surname <br>
    Kurs programowania
    <br>
  LABEL;

$text = <<< LABEL
    <hr>
    Opcja II<br>
    Imię i nazwisko $name $surname <br>
    Kurs programowania
    <br>
  LABEL;

  echo "$text<br>";

//składnia nowdoc
echo <<< 'LABEL'
    Imię i nazwisko $name $surname <br>
    Kurs programowania
    <br>
  LABEL;

     ?>
  </body>
</html>
