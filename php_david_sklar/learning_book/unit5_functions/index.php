<?php

//array for globals variable for example
//$a = 5
//public function FunctionName($value='')
//{
//  $GLOBALS['a'] = something;
//}
// echo "<pre>";
// echo print_r($GLOBALS);
// echo "</pre>";


//strong type Function

// function countdown(int $top) {
//  while ($top > 0) {
//   print "$top..";
//   $top--;
//  }
// print "boom!\n"; }
// $counter = 5; countdown($counter);
// print "Now, counter is $counter";

//return strong type function
// function restaurant_check($meal, $tax, $tip): float {
//   $tax_amount = $meal * ($tax / 100);
//   $tip_amount = $meal * ($tip / 100);
//   $total_amount = $meal + $tax_amount + $tip_amount;
//   return $total_amount;
// }

//declare(strict_types=1) - strong type ON


 ?>

 <!-- 1. Напишите функцию, возвращающую дескриптор <img /> разметки HTML-страницы. Эта функция должна принимать URL изображения в качестве обязательного аргумента, а так- же текст надписи, ширину и высоту изображения в качестве необязательных аргументов alt, height и width соответственно.
2. Видоизмените функцию из предыдущего упражнения таким образом, чтобы передавать ей толь- ко имя файла в качестве аргумента URL. Введите глобальную переменную в теле данной функ- ции, чтобы дополнить указанное имя файла до полного URL. Так, если данной функции пере- дано имя файла photo.png, а глобальная переменная содержит путь /images/, то атрибут возвращаемого дескриптора <img> будет содержать путь /images/photo.png. Такая функ- ция упрощает поддержание правильности дескрипторов изображений даже в том случае, если изображения размещаются по новому пути или на другом сервере. Для этого достаточно изме- нить содержимое глобальной переменной, например, с /images/ на http://images.example .com/.
3. Разместите функцию из предыдущего упражнения в отдельном файле. Затем создайте еще один файл, загружающий первый файл, используя его для вывода на экран ряд дескрипторов <img />.
4. Что выводится на экран в приведенном ниже фрагменте кода?
<?php
// function restaurant_check($meal, $tax, $tip) { $tax_amount = $meal * ($tax / 100); $tip_amount = $meal * ($tip / 100);
// return $meal + $tax_amount + $tip_amount;
// } // сумма за счет
//     $cash_on_hand = 31;
//     $meal = 25;
//     $tax = 10;
//     $tip = 10;
// while(($cost = restaurant_check($meal, $tax,$tip)) < $cash_on_hand) {
// $tip++;
// print "I can afford a tip of $tip% ($cost)\n"; }
?>
5. Такие цвета веб-палитры, как, например, #ffffff и #сс3399, составляются из шестнадцате- ричных значений красной, зеленой и синей составляющих цвета. Напишите функцию, прини- мающую в качестве аргументов десятичные значения красной, зеленой и синей составляющих
Глава 5. Группирование логики в функциям и файлам 113
 цвета и возвращающую символьную строку, содержащую подходящий цвет для применения на веб-странице. Так, если указаны аргументы 255, 0 и 255 при вызове данной функции, она должна возвратить символьную строку #ff00ff. Для написания данной функции может оказаться полезной встроенная функция dechex(), документацию на которую можно найти по адресу http://www.php.net/dechex. -->

 <?php


//task1
function returnImage($link,$alt='',$height='100',$width='100')
{
  print "<img src=\"$link\" alt=\"$alt\" width=\"$width\" height=\"$height\">";
}

//returnImage('https://www.w3schools.com/images/lamp.jpg');

//task2
//$linkPhoto = "https://www.w3schools.com/images/";
function returnImage2($link, $alt='',$height='100',$width='100')
{
  $patch = $GLOBALS['linkPhoto'].$link;
  print "<img src=\"$patch\" alt=\"$alt\" width=\"$width\" height=\"$height\">";
}

returnImage2('lamp.jpg');

//task3

require('./function.php');

returnImage3('lamp.jpg');

function restaurant_check($meal, $tax, $tip) { $tax_amount = $meal * ($tax / 100); $tip_amount = $meal * ($tip / 100);
return $meal + $tax_amount + $tip_amount;
}
    $cash_on_hand = 31;
    $meal = 25;
    $tax = 10;
    $tip = 10;
while(($cost = restaurant_check($meal, $tax,$tip)) < $cash_on_hand) {
$tip++;
print "I can afford a tip of $tip% ($cost)\n"; }

function intToDex($value,$value2,$value3)
{
  return dechex($value).dechex($value2).dechex($value3);
}

print intToDex(255,0,255);

  ?>
