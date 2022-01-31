<?php

include_once('model/messages.php');
include_once('model/category.php');
$title = 'Add article';


$cats = categoryAll();
$err = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$fields = extractField($_POST,['name','text','id_cat']);
	$err = validateFields($fields);
	//var_dump($fields);
	if(empty($err)){
		messagesAdd($fields);
		$id = dbLastId();
		header("Location: ?c=message&id=$id");
		exit();
	}

} else {
	$fields = ['name' => '', 'text' => '', 'id_cat' => 0];
}

include('view/_formMassages.php');

?>
