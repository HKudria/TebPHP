<?php
include_once('core/db.php');
include_once('core/arr.php');
$cname = $_GET['c'] ?? 'index';
$path = "controller/$cname.php";
include_once($path);