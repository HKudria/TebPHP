<?php
$name = 'Umberto';

function say_hello() {
  echo 'Hello, ';
  echo $GLOBALS['name'];
}

say_hello();


function my_own_exception($ex){
  error_log($ex->getMessage);
  echo "<br>Something wrong<br>";
}

//не отслеживаемый исключения
set_exception_handler('my_own_exception');

$db = new PDO('loc:fdff');



 ?>
