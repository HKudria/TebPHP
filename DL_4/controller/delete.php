<?php
include_once('model/messages.php');
include_once('model/errors.php');


$id = checkID($_GET['id']?? '');
if ($id){
    if($_GET['id']!=$id){
        header("Location: ?c=delete&id=$id");
        exit();
    }
    messagesDelete($id);
    header("Location: ./");
    exit();
} else {
   error404();
    exit();
}




