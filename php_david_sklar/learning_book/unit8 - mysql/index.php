<?php
try {
$db = new PDO('mysql:host=localhost;dbname=test', 'root','');
//echo "Connection with DataBase - ok";
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // I don't know what it's mean
// $q = $db->exec("CREATE TABLE cars (
//                 car_id INT,
//                 car_name VARCHAR(255),
//                 price DECIMAL(4,2),
//                 is_gas INT
//               )");
// } catch (PDOException $e){
//   echo "Connection with DataBase - Fault " . $e->getMessage();
// }

$sql = $db->query('SELECT * FROM dishes ORDER BY price');
while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
    echo $row['dish_name'] . " - ". $row['price'] . "<br>";
  }
} catch (PDOException $e){
 echo "Connection with DataBase - Fault " . $e->getMessage();
}
 ?>
<br><br>
<form method="post">
  <input type="text" name="min_price"> Wprowadż minimalną cene <br>
  <input type="submit" value="Zatwirdz">
</form>
<br>

<?php


if(isset($_POST['min_price'])){
  $min_price = filter_input(INPUT_POST,'min_price',FILTER_VALIDATE_INT);
  if($min_price<=0 || $min_price === false){
    $GLOBALS['error']['mistake'] = "price isn't valid";
  }else{
    $sql = $db->query("SELECT dish_name, price FROM dishes WHERE price>$min_price");
    while ($row=$sql->fetch()) {
      echo $row['dish_name'] . " - ". $row['price'] . "<br>";
    }
  }
  unset($_POST['min_price']);
}

if(isset($GLOBALS['error']['mistake'])){
  echo $GLOBALS['error']['mistake'];
  unset($GLOBALS['error']['mistake']);
}

$sql3 = $db->query("SELECT dish_name FROM dishes");
echo <<<FORM
<br>
<form method="post">
<input type="text" name="name"> Podaj imię<br>
<input type="text" name="phone"> Podaj numer telefonu<br>
  <select name="dish">
FORM;
  while ($row=$sql3->fetch()) {
    $distSafe = htmlentities($row['dish_name']);
    echo "<option value=\"$distSafe\">$distSafe</option>";
  }
echo <<< FORM
  </select><br>
  <input type="submit" value="Zatwirdz">
</form>
FORM;

if(isset($_POST['dish'])&&isset($_POST['name'])&&isset($_POST['phone'])){
  $name = $db->quote(htmlentities(trim($_POST['name'])));
  $name = strtr($name, array('_'=>'\_', '%'=>'\%'));
  $phone = filter_input(INPUT_POST,'phone',FILTER_VALIDATE_INT);
  if($phone<=0 || $phone === false){
    $GLOBALS['error']['mistake'] = "phone isn't valid";
    exit();
  }
  $dish = $db->quote(htmlentities($_POST['dish']));
  $dish = strtr($dish, array('_'=>'\_', '%'=>'\%'));
  $sql4 = $db->query("SELECT * FROM dishes WHERE dish_name = $dish");
  $row=$sql4->fetch();
  $dish = $row['dish_id'];
  $sql5 = $db->prepare("INSERT INTO visitors (name,phone,dish_id) VALUES (?,?,?)");
  $sql5->execute(array($name,$phone,$dish));

}
 ?>

 <form method="post">

 </form>

<!-- VARCHAR(length) - Символьная строка переменной длины, определяемой параметром length

INT - Целое число

BLOB - Строковые или двоичные данные длиной до 64 Кбайт
Этот тип столбца в PostgreSQL называется BYTEA вместо BLOB.

DECIMAL(total_digits, decimal_places) - Десятичное число, где общее количество цифр определяется параметром total_digits, а количество цифр после десятичной точки – параметром decimal_places

DATETIME - дата и время 2000-03-20 19:45:00
Этот тип столбца в Oracle называется DATE вместо DATETIME. -->
