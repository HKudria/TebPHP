<?php

include_once('../model/messages.php');
include_once('../model/category.php');
include_once('../core/db.php');
include_once('../core/arr.php');

$cats = categoryAll();
$err = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$fields = extractField($_POST,['name','text','cat_id']);
	$err = validateFields($fields);
	var_dump($fields);
	if(empty($err)){
		messagesAdd($fields);
		$id = dbLastId();
		header("Location: message.php?id=$id");
		exit();
	}

} else {
	$fields = ['name' => '', 'text' => '', 'cat_id' => 0];
}

include('../view/_formMassages.php');

?>
