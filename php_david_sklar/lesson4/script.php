<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <?php
    if(isset($_GET['id']))
    echo file_get_contents($_GET['id']);
     ?>
    <meta charset="utf-8">
    <title>test <?php $_GET['id']; ?></title>
  </head>
  <body>
    <a href="./">Powrót</a>


  </body>
</html>
