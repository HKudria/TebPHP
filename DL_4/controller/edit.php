<?php
include_once('../model/messages.php');
include_once('../model/category.php');
include_once('../core/db.php');
include_once('../core/arr.php');

$err = '';
$id = checkID($_GET['id']?? '');
if ($id){

    $cats = categoryAll();

    if($_GET['id']!=$id){
        header("Location: message.php?id=$id");
        exit();
    }
    if(($message = messagesOne($id))!==null){
        $fields = ['name' => $message['name'], 'text' => $message['text'], 'cat_id' => $message['id_cat']];
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
    $err = validateFields($fields);
    if(empty($validateError)){
        messagesEdit($fields);
        header("Location: message.php?id=$id");
        exit();
    }
}


?>



