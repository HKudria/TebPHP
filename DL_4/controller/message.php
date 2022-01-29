<?php
include_once('../model/messages.php');
include_once('../model/errors.php');
include_once('../core/db.php');

$id = checkID($_GET['id']?? '');
if ($id){
    if($_GET['id']!=$id){
        header("Location: edit.php?id=$id");
        exit();
    }
    if($message = messagesOne($id)){
        //var_dump($message);
        include('../view/_massages.php');
    } else {
        error404();
    }
} else {
    error404();
}

?>


