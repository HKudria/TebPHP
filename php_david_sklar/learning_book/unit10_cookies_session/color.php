<?php
session_start();

if(!empty($_POST['color'])){
  $_SESSION['color'] = $_POST['color'];
} else {
  $_SESSION['error'] = "nie wybralesz koloru cwaniaczku";
  header('location: ./');
}

 ?>

 <!DOCTYPE html>
 <html lang="pl" dir="ltr">
   <head>
     <style>
     body {
        background-color: <?php echo $_SESSION['color']; ?>;
      }
     </style>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

   </body>
 </html>
