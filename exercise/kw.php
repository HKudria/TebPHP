<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Obliczenia kwadratu</title>
  </head>
  <body>
    <?php
      if (empty($_POST)) {
        echo "Wypelnij dane!";
        ?>

        <script type="text/javascript">
          history.back();
        </script>

        <?php
      } else {
        $a = str_replace(",",".",$_POST['a']);
        if ($a<=0) {
        echo "Wypelnij dane!";


      } else {
          $area = number_format($a*$a,2); //$a**2
          $rectangle = number_format(4*$a,2);

          echo <<< RESULT
            Obliczenia kwadratu
            Dlugość strony $a <br>
            Pole kwadratu: $area cm<sup>2</sup> <br>
            Obwód kwadratu: $rectangle cm <br>

          RESULT;
      }
    }

     ?>

     <a href="./kwadrat.php">Strona główna</a>
  </body>
</html>
