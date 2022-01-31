<?php
include_once('core/db.php');
include_once('core/arr.php');
include_once('core/system.php');
include_once('core/errors.php');


$html = template('main', ['title'=>'test', 'content'=>'test content']);
//$cname = $_GET['c'] ?? 'index';
//$path = "controller/$cname.php";
//
//if(checkControllerName($cname) && file_exists($path)){
//    include_once($path);
//} else {
//   error404();
//}








