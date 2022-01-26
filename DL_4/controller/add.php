<?php

include_once('../model/messages.php');
include_once('../model/category.php');
include_once('../core/db.php');
include_once('../core/arr.php');

$cats = categoryAll();
$err = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$fields = extractField($_POST,['name','text','cat_id']);
	
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
