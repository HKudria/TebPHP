<?php

$db = new PDO('mysql:dbname=cv;host=localhost;port=3306;charset=utf8','root','');

//denny to open this file
if(str_contains($_SERVER['REQUEST_URI'], 'connect.php')){
    header('Location: ./index.php');
}