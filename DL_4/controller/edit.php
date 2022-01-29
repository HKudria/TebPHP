<?php
include_once('model/messages.php');
include_once('model/category.php');
include_once('model/errors.php');

$err = '';
$id = checkID($_GET['id']?? '');
if ($id){

    $cats = categoryAll();

    if($_GET['id']!=$id){
        header("Location: ?c=edit&id=$id");
        exit();
    }
    if($message = messagesOne($id)){
        $fields = ['name' => $message['name'], 'text' => $message['text'], 'cat_id' => $message['id_cat']];
        include('view/_formMassages.php');
    } else {
        error404();
    }
} else {
    error404();
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $fields = extractField($_POST,['name','text','cat_id']);
    $fields['id'] = $id;
    $err = validateFields($fields);
    if(empty($validateError)){
        messagesEdit($fields);
        header("Location: ?c=message&id=$id");
        exit();
    }
}


?>



