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
      require_once './scripts/connect.php';
      $sql = "SELECT * FROM `users` INNER JOIN `cities` ON users.city_id = cities.city_id;";
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

      while ($row = $result->fetch_assoc()) {
        echo <<< USER
          <tr>
            <td>$row[user_id] </td>
            <td>$row[name] </td>
            <td>$row[surname] </td>
            <td>$row[city] </td>
            <td>$row[birthday] </td>
          </tr>
        USER;
      }
      echo "</table>";

     ?>


  </body>
</html>
