<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane użytkownika</title>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
    <form method="get">
      <input type="text" name="name" placeholder="Podaj imię"><br><br>
      <input type="text" name="nazwisko" placeholder="Podaj nazwisko"><br><br>
      <input type="radio" name="sex" value="m" checked>Mężczyzna
      <input type="radio" name="sex" value="k">Kobieta <br><br>
      <select name="nationality">
        <option value="Polska">Polska</option>
        <option value="Ukraińska">Ukraińska</option>
        <option value="USA">USA</option>
      </select>
      Narodowość <br><br>

      <input type="color" name="color"> Uluboiny kolor <br><br>
      <input type="submit" name="zatwierdz" value="Zatwierdż">
      <hr>
    </form>

    <?php
    //placeholder - подсказка для поля
    //isset — Определяет, была ли установлена переменная значением, отличным от null
    //empty — Проверяет, пуста ли переменная
    //ucfirst() - первый символ с большой буквы
    //strtolower() - перевод строки в нижний регистр
    //strlen - длина строки
    //trim - удаление пробелов в строке перед и после текста
    //код читает с права на лево - !Порядок имеет значение
    //substr - длина строки ($name, 0 , 10) ограничиваем длину до 10 символов
  if (!empty($_GET['zatwierdz'])) {
    if (!empty($_GET['name']) && !empty($_GET['nazwisko']) && !empty($_GET['sex']) && !empty($_GET['nationality']) && !empty($_GET['color'])) {
      $name = trim($_GET['name']);
      $name = substr(ucfirst(strtolower($name)),0,10);
      $surname = trim($_GET['nazwisko']);
      $surname = substr(ucfirst(strtolower($surname)),0,15);
      switch ($_GET['sex']) {
        case 'm':
          $sex = 'mężczyzna';
          break;
        default:
          $sex = 'kobieta';
          break;
        }
      //echo strlen($name);
      //echo strlen($surname);
      echo <<< T
      Twoje imię:  $name <br>
      Twoje nazwisko: $surname <br>
      Twoja płeć : $sex <br>
      Twoja narodowość : $_GET[nationality] <br>
      Twój kolor : $_GET[color]
    T;
  } else {
    echo "Wypelni dane";
  }
  }


    ?>
  </body>
</html>
