<!-- 1. Что будет содержать массив $_POST после передачи на обработку приведенной ниже формы, где выбран третий элемент из списка Braised Noodles (Тушеное мясо с лапшой), первый и последний элементы из списка Sweet (Сладкое), а в текстовом поле введено значение 4?
    <form method="POST" action="order.php">
    Braised Noodles with: <select name="noodle">
    <option>crab meat</option>
    <option>mushroom</option>
    <option>barbecued pork</option>
    <option>shredded ginger and green onion</option>
    </select>
Глава 7. Создание веб-форм для обмена данными с пользователями 161
   <br/>
  Sweet: <select name="sweet[]" multiple>
  <option value="puff"> Sesame Seed Puff
  <option value="square"> Coconut Milk Gelatin Square
  <option value="cake"> Brown Sugar Cake
  <option value="ricemeat"> Sweet Rice and Meat
  </select>
  <br/>
  Sweet Quantity: <input type="text" name="sweet_q">
  <br/>
  <input type="submit" name="submit" value="Order">
  </form>


2. Напишите функцию process_form(), выводящую на экран все параметры переданной на обработку формы и их значения. Можете допустить, что параметры формы имеют только скалярные значения.
3. Напишите программу, выполняющую основные арифметические операции. С этой целью отобразите форму с текстовым полем для ввода двух операндов и список, размечаемых дескриптором <select>, для выбора операции сложения, вычитания, умножения или деления. Организуйте проверку достоверности вводимых данных, чтобы они были числовыми и пригодными для выполнения выбранной арифметической операции. Функция обработки вводимых данных должна отображать операнды, операцию и результат ее выполнения. Так, если введены операнды 4 и 2 и выбрана операция умножения, то функция обработки вводимых данных должна отобразить следующее: 4*2 = 8.
4. Напишите программу, отображающую, проверяющую достоверность и обрабатывающую форму для ввода сведений о доставленной посылке. Эта форма должна содержать поля ввода адресов отправителя и получателя, а также размеров и веса посылки. При проверке достоверности данных из переданной на обработку формы должно быть установлено, что вес посылки не превышает 150 фунтов (около 68 кг), а любой из ее размеров — 36 дюймов (порядка 91 см). Можете также допустить, что в форме введены адреса США, но в таком случае проверьте правильность ввода обозначения штата и почтового индекса. Функция обработки формы в вашей программе должна выводить на экран сведения о посылке в виде организованного, отформатированного отчета.
5. Видоизмените (дополнительно) функцию process_form(), перечисляющую все параметры переданной на обработку формы и их значения, а также правильно обрабатывающую те параметры переданной на обработку формы, которые содержат массивы в качестве своих значений. Напомним, что элементы массива сами могут содержать массивы. -->

1.<br>
$_POST['noodle'] = "barbecued pork";<br>
$_POST['sweet'] = ["puff","ricemeat"];<br>
$_POST['sweet_q'] = "4";<br>
<br>
2.<br>
<?php
function process_form(){
  if(!empty($_POST)){
    foreach ($_POST as $key => $value) {
      echo htmlentities($key) . "-->" . htmlentities($value) . "<br>";
    }
  }
}

process_form();
 ?><br>
3. <br>
<?php
if (!empty($_POST)) {
  if ((filter_input(INPUT_POST, 'a', FILTER_VALIDATE_INT)||filter_input(INPUT_POST, 'a', FILTER_VALIDATE_FLOAT))&&(filter_input(INPUT_POST, 'b', FILTER_VALIDATE_INT)||filter_input(INPUT_POST, 'b', FILTER_VALIDATE_FLOAT))){
    switch ($_POST['operation']) {
      case 'plus':
        $result = $_POST['a']+$_POST['b'];
        break;
      case 'minus':
        $result = $_POST['a']-$_POST['b'];
        break;
      case 'dev':
        $result = $_POST['a']/$_POST['b'];
        break;
      case 'multiple':
        $result = $_POST['a']*$_POST['b'];
        break;

    }
  } else {$result = "Wprowadz prawidlowe dane";}

}
 ?>

 <!DOCTYPE html>
 <html lang="pl" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form  method="post">
       <input type="text" name="a">
       <input type="text" name="b">
       <select name="operation">
         <option value="plus">+</option>
         <option value="minus">-</option>
         <option value="dev">/</option>
         <option value="multiple">*</option>
       </select>
       <input type="submit" value="Zatwierdz">

       <?php if(isset($result)) echo "<br>" . $result;?>
     </form>
   </body>
 </html>

<a href="task4.php"></a>
