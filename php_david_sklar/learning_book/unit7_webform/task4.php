

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Task4</title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="name_sent" placeholder="Adress nadawcy">
      <input type="text" name="name_order" placeholder="Adress odbiorcy">
      <input type="number" name="massa" placeholder="Waga przesylki">
      <input type="number" name="parcel_a" placeholder="Dlugość">
      <input type="number" name="parcel_b" placeholder="Wysokość">
      <input type="number" name="parcel_c" placeholder="Głębokość">
      <input type="submit" name="" value="Wyslij">
    </form>

    <?php
      $myarray = array();

    if (!empty($_POST)) {

      if (strlen(trim($_POST['name_sent']))>3) {
        $myarray['name_sent'] = $_POST['name_sent'];
      } else {
        $GLOBALS['error'] = "Wprowadz poprawne danne";
        $myarray = array();
        }
      if (strlen(trim($_POST['name_order']))>3){
        $myarray['name_order'] = $_POST['name_order'];
      } else {
        $GLOBALS['error'] = "Wprowadz poprawne danne";
        $myarray = array();
        }
      if ($_POST['massa']<=68) {
        $myarray['massa'] = $_POST['massa'];
      } else {
        $GLOBALS['error'] = "Wprowadz poprawne danne";
        $myarray = array();
        }
      if ($_POST['parcel_a']<=91&&$_POST['parcel_c']<=91&&$_POST['parcel_b']<=91) {
        $myarray['parcel_a'] = $_POST['parcel_a'];
        $myarray['parcel_b'] = $_POST['parcel_b'];
        $myarray['parcel_c'] = $_POST['parcel_c'];
      } else {
        $GLOBALS['error'] = "Wprowadz poprawne danne";
        $myarray = array();
        }
    }

//    var_dump($myarray);
    if (empty($GLOBALS['error']) && !empty($myarray)) {
      echo <<<TABLE
        <table>
        <tr>
          <th>Adress nadawcy</th>
          <th>Adress odbiorcy</th>
          <th>Waga paczki</th>
          <th>Długość</th>
          <th>Wysokość</th>
          <th>Głębokość</th>
        </tr>
        <tr>
      TABLE;
      foreach ($myarray as $key => $value) {
        echo "<td>$value</td>";
      }
      echo "</tr></table>";
    }
     ?>
  </body>
</html>
