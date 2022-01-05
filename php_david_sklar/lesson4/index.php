<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Arrays and POST||GET</title>
  </head>
  <body>
    <?php
      $array = [
        'One' => ['1','11','111'],
        'Two' => ['2','22','222'],
        'Three' => ['3','33','333']
      ];
        echo "<ul>";
      foreach ($array as $key => $value) {
          echo "<li>";
        echo  $key;
            echo "<ol>";
        foreach ($value as $key1 => $date) {
          echo "<li>$date</li>";
        }
        echo "</ol></li>";
      }
        echo "</ul>";

      $text = file_get_contents("1.txt");

      echo $text;

      file_put_contents("1.txt", "<br>some new text", FILE_APPEND);

      echo file_get_contents("1.txt");

      $files = scandir("./");

      foreach ($files as $file) {
        if(is_file($file))
        echo "<br><a href = \"./script.php?id=$file\">File $file</a> ";
      }

echo "<br><br>";

      if(!empty($_POST['name'])&&!empty($_POST['password'])){
        $name=$_POST['name'];
        $pass = $_POST['password'];
      file_put_contents('2.txt', "$name $pass\n", FILE_APPEND);
      echo "Dane zapisano";
    }

     ?>

<form method="post">
  <input type="text" name="name">
  <input type="password" name="password">
  <input type="submit" value="Wysli">
</form>


  </body>
</html>
