<?php

include_once('../model/messages.php');
include_once('../model/db.php');
include_once('../model/category.php');

$cats = categoryAll();
$err = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$fields['name'] = trim($_POST['name']);
	$fields['text'] = trim($_POST['text']);
	$fields['id_cat'] = (int)$_POST['id_cat'];
	
	if($fields['name'] === '' || $fields['text'] === ''){
		$err = 'Заполните все поля!';
	}
	else{
		messagesAdd($fields);
		$id = dbLastId();
		header("Location: message.php?id=$id");
		exit();
	}
} else {
	$fields = ['name' => '', 'text' => '', 'id_cat' => 0];
}

include('../view/_formMassages.php');

?>
