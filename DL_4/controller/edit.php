<?php
include_once('../model/messages.php');
include_once('../model/category.php');
include_once('../core/db.php');
include_once('../core/arr.php');

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

    $fields = extractField($_POST,['name','text','cat_id']);
    $fields['id'] = $id;

    //var_dump($fields);
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



