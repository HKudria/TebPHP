<!-- Filter for int and rage between 18 an 65 it's work only for INTEGER
$input['age'] = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT,
array('options' => array('min_range' => 18, 'max_range' => 65)));
if (is_null($input['age']) || ($input['age'] === false)) {
  $errors[] = 'Please enter a valid age between 18 and 65.';
}

htmlentities - экранирование спец симовлов в формах, не допускает выполнять скрипты и прочее

//проверка селект с помощью функций и масива
sweets = array('puff' => 'Sesame Seed Puff',
'square' => 'Coconut Milk Gelatin Square',
'cake' => 'Brown Sugar Cake', 'ricemeat' => 'Sweet Rice and Meat');
function generate_options_with_value ($options) { $html = '';
foreach ($options as $value => $option) {
$html .= "<option value= ̈$value ̈>$option</option>\n";
}
Глава 7. Создание веб-форм для обмена данными с пользователями 145
 }
return $html;
// отобразить форму function show_form() {
$sweets = generate_options_with_value($GLOBALS['sweets']); print<<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
       Your Order: <select name="order">
       $sweets
    </select>
    <br/>
    <input type="submit" value="Order">
    </form>
    _HTML_;
}
<form method="post" action="order.php">
Your Order: <select name="order">
<option value="puff">Sesame Seed Puff</option>
<option value="square">Coconut Milk Gelatin Square</option>
<option value="cake">Brown Sugar Cake</option>
<option value="ricemeat">Sweet Rice and Meat</option>
</select>
<br/>
<input type="submit" value="Order">
</form>
Из списка, размечаемого дескриптором <select> в примере 7.19, на обработку должно быть пе- редано одно из следующих значений: puff, square, cake или ricemeat. В примере 7.20 показано, как переданное на обработку значение проверяется на достоверность в функции validate_form().
Пример 7.20. Проверка достоверности значения, передаваемого на обработку из списка, разме- чаемого дескриптором <select>
$input['order'] = $_POST['order'];
if (! array_key_exists($input['order'] , $GLOBALS['sweets'])) {
$errors[] = 'Please choose a valid order.'; }


-->

<a href="hometask.php">hometask</a>
<a href="task4.php">Task4</a>
