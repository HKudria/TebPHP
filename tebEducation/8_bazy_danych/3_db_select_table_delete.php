<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
      session_start();
      require_once './scripts/connect.php';
      $sql = "SELECT * FROM `users` INNER JOIN `cities` ON users.city_id = cities.city_id;"; //соеденение двух таблиц
      $result = $connect->query($sql);

      echo <<< TABLE
      <table>
        <tr>
          <th>ID</th>
          <th>Imię</th>
          <th>Nazwisko</th>
          <th>Miasto</th>
          <th>Data urodzenia</th>
        </tr>
      TABLE;

      while ($row = $result->fetch_assoc()) { //вывод всех данных с таблицы
        echo <<< USER
          <tr>
            <td>$row[user_id] </td>
            <td>$row[name] </td>
            <td>$row[surname] </td>
            <td>$row[city] </td>
            <td>$row[birthday] </td>
            <td><a href="./scripts/delete.php?deleteId=$row[user_id]">Usuń</a></td>
          </tr>

        USER;
      }
      echo "</table>";

      if(!empty($_SESSION['aRow']))
      {
      if ($_SESSION['aRow']==-1){
        echo 'nie udalo się usunąć dannych';
      } else {
          echo "Usuniento dannych " . $_SESSION['aRow'] . "<br>";
          echo "O numerze id " . $_SESSION['id'];
          unset($_SESSION['id']);
      }

      unset($_SESSION['aRow']);
    }
           ?>


        </body>
</html>
