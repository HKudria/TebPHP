<?php
session_start();
if(isset($_SESSION['counter'])){
  $_SESSION['counter'] +=1;
} else $_SESSION['counter'] = 1;

echo "Tyle razy ty byleś tutaj -> ".$_SESSION['counter'] . "<br>";

if($_SESSION['counter']==5) echo "Uch to 5ty raz <br>";
if($_SESSION['counter']==10) echo "Już jest dycha <br>";
if($_SESSION['counter']==15) echo "Ale widze ty to lubisz <br>";
if($_SESSION['counter']==20) {
  echo "Idziemy od początku <br>";
  unset($_SESSION['counter']);
}

if(!empty($_SESSION['error'])) {
  echo "<br>" . $_SESSION['error'] . "<br>";
  unset($_SESSION['error']);
  unset($_SESSION['color']);
}

if(!empty($_SESSION['color'])) {
  echo "<br> Wybralesz taki kolor wczesniej " . $_SESSION['color'] . "<br>";
}

 ?>

<form action="color.php" method="post">
  <input type="color" name="color"> Wybież color
  <input type="submit" value="Zatwierdż">
</form>


<?php
for ($i=0; $i < 6 ; $i++) {
  if(empty($_SESSION['order']['towar'.$i])){
   $valueArr[$i] = 0;
 } else $valueArr[$i] = $_SESSION['order']['towar'.$i];
}
echo <<< ORDER
  <form action="order.php" method="post">
  Towar 1   <input type="number" name="towar0" value="$valueArr[0]"><br>
  Towar 2   <input type="number" name="towar1" value="$valueArr[1]"><br>
  Towar 3   <input type="number" name="towar2" value="$valueArr[2]"><br>
  Towar 4   <input type="number" name="towar3" value="$valueArr[3]"><br>
  Towar 5   <input type="number" name="towar4" value="$valueArr[4]"><br>
  Towar 6   <input type="number" name="towar5" value="$valueArr[5]"><br>
  <input type="submit" value="Zatwierdż">
  </form>
ORDER;
 ?>
