<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Danne samochodowe</title>
  </head>
  <body>
    <form action="script.php" method="post">

      Wybierz marke samochodu <select name="manufactury">
        <option value="Audi">AUDI</option>
        <option value="VW">VW</option>
        <option value="Opel">OPEL</option>
        <option value="Mercedes">Mercedes</option>
        <option value="Skoda">Skoda</option>
        <option value="Seat">Seat</option>
        <option value="Nissan">Nissan</option>
        <option value="Peugeot">Peugeot</option>
        <option value="Citroen">Citroen</option>
      </select>
      <br><br>

      <input type="text" name="model" placeholder="Wpiś model samochodu"><br><br>
      <input type="color" name="color"><br><br>
      <input type="date" name="year"><br><br>
          <!-- <input type="number" min="1900" max="2021" step="1" name="year"><br><br> -->
          <!-- <select name="year">
          /*<?php
            for ($i=1900; $i <= date("Y"); $i++) {
            echo '<option value="',$i,'">',$i,'</option>';
            }
            ?> */
          </select> -->
      <input type="submit" name="buttom" value="Zatwierdz">

    </form>
  </body>
</html>
