<?php
include_once('model/messages.php');
include_once('model/category.php');
$title = 'Edit article';

$err = '';
$id = checkID($_GET['id'] ?? '');
if ($id){
    $cats = categoryAll();
    if($_GET['id']!=$id){
        header("Location: ?c=edit&id=$id");
        exit();
    }
    if($fields = messagesOne($id)){
        include('view/_formMassages.php');
    } else {
        error404();
    }
} else {
    error404();
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $fields = extractField($_POST,['name','text','id_cat']);
    $err = validateFields($fields);
    if(empty($validateError)){
        messagesEdit($fields,$id);
        header("Location: ?c=message&id=$id");
        exit();
    }
}


?>



