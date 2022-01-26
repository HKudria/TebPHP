<?php
include_once('../model/messages.php');
include_once('../model/db.php');
include_once('../model/category.php');

$id = checkID($_GET['id']?? '');
if ($id){

    $cats = categoryAll();
    $err = '';

    if($_GET['id']!=$id){
        header("Location: message.php?id=$id");
        exit();
    }
    if(($message = messagesOne($id))!==null){
        $fields = ['name' => $message['name'], 'text' => $message['text'], 'id_cat' => $message['id_cat']];
        include('../view/_formMassages.php');
    } else {
        header("Location: ../index.php");
        exit();
    }
} else {
    header("Location: ../index.php");
    exit();
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $fields['id'] = $id;
    $fields['name'] = trim($_POST['name']);
    $fields['text'] = trim($_POST['text']);
    $fields['id_cat'] = (int)$_POST['id_cat'];

    if($fields['name'] === '' || $fields['text'] === ''){
        $err = 'Заполните все поля!';
    }
    else{
        messagesEdit($fields);
        header("Location: message.php?id=$id");
        exit();
    }
}


?>



