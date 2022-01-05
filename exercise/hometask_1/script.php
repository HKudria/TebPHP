<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Danne samochodu</title>
  </head>
  <body>
    <?php
    if (!empty($_POST["manufactury"])&&!empty($_POST["model"])&&!empty($_POST["color"])&&!empty($_POST["year"])) {
      $howManyYear = date("Y") - (int) $_POST["year"];
      if ($howManyYear < 20) {
        $string = "Masz nowe auto";
      } else  {
        $string = "Musisz kupić nowe auto";
      }
      echo <<< OUT
        Danne twojego sanohodu: <br>
        Marka : $_POST[manufactury] <br>
        Model : $_POST[model] <br>
        Kolor : $_POST[color] <a style="color:$_POST[color]; ">||||||||||||</a> <br> 
        Rok produkcji : $_POST[year] <br>
        Twoje auto ma $howManyYear lat  - $string

      OUT;
    } else {
      ?>
      <script type="text/javascript">
        alert("Wypelni wszyskie danne!")
        history.back();
      </script>
      <?php
    }
     ?>

     <br><a href="./">Strona Główna</a>
  </body>
</html>
