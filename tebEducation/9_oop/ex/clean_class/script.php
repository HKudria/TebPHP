<?php
require_once 'rectangle.php';



$rect = new Rectangle($_POST['sideA'],$_POST['sideB']);
$rectArea = $rect->area();
//echo $rectArea;

header("Location: ./1.php/?result=$rectArea");