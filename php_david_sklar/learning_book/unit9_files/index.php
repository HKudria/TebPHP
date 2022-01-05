<!--
rb Чтение
rb+ Чтение, запись
wb Запись
wb+
ab Запись -->

<?php
$homepage = file_get_contents('./index.html');
$name = "Jame";
$page = "Homepage";
$color = "#fff";
$homepage = str_replace("{name}","$name",$homepage);
$homepage = str_replace("{color}","$color",$homepage);
$homepage = str_replace("{page_title}","$page",$homepage);
echo $homepage;
file_put_contents('./index2.html',$homepage);

$emailDB = array();
foreach (file('./adress.txt') as $line) {
  if(array_key_exists($line, $emailDB)){
      $emailDB[$line]++;
  } else {
      $emailDB[$line] = 1;
  }

}
arsort($emailDB);
echo "<pre>";
echo print_r($emailDB);
echo "</pre>";
//file_put_contents('./newadress.txt',implode(',',$emailDB));
$fh = fopen('newadress.txt','wb');
foreach ($emailDB as $key => $value) {
  fwrite($fh, "$value,$key");
}
echo "<table>";

$fh = fopen('dish.cvs','rb');
while((!feof($fh)) && ($info = fgetcsv($fh))){
    echo "<tr>";
  foreach ($info as $key) {
    echo "<td>$key</td>";
  }
      echo "<tr>";
}
echo "</table>"
 ?>


 <?php

if(empty($_POST['adres'])){
  echo <<<FORM
   <br><br>
   <form method="post">
     <input type="text" name="adres" placeholder="Wprowdż nazwe pliku"><br>
     <input type="submit" value="Zatwierdż">
   </form>
  FORM;
} else {
  $adr = htmlentities(trim($_POST['adres']));
  unset($_POST['adres']);
  //hpecho $adr;
  $html = explode('.',$adr);
  if($html[1]!="html"){
    $GLOBALS['error'] = "you have permision only to look .html files";
  } else {
  if(!empty($adr)){
    if (file_exists('./'.$adr)) {
      if (is_readable($adr)) {
          $template = file_get_contents($adr);
          echo $template;
        }
          else {
            $GLOBALS['error'] = "Can't read template file."; }
    } else {
  $GLOBALS['error'] = "No index file in /usr/local/htdocs.";
    }
  }else{
    $GLOBALS['error'] = "wprowadż prawidlowe imię";
    exit();
  }
}
}
echo "<br>";

if(!empty($GLOBALS['error'])){
  echo $GLOBALS['error'];
  unset($GLOBALS['error']);
}

  ?>
