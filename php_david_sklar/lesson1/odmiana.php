<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Odmina polskiego zlotego</title>
  </head>
  <body>
    <?php

      function odminaZlotego($value)
      {
        $waluta = $value;
        if ($waluta == 1){
          echo $waluta , " złoty";
        }
        elseif(($waluta % 10) == 1 || ($waluta % 10) == 5 || ($waluta % 10) == 6 || ($waluta % 10) == 7 || ($waluta % 10) == 8 || ($waluta % 10) ==9 || ($waluta %  10) == 0){
          echo $waluta , " złotych";
        }else {
          echo $waluta, " złote";
        }
      }

      for ($i=0; $i < 110; $i++) {
        odminaZlotego($i);
        echo "<br>";
      }


     ?>

    </form>
  </body>
</html>
