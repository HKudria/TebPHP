<?php
include_once('../model/messages.php');
include_once('../model/db.php');

$id = checkID($_GET['id']?? '');
if ($id){
    if($_GET['id']!=$id){
        header("Location: edit.php?id=$id");
        exit();
    }
    if(($message = messagesOne($id))!==null){
        include('../view/_massages.php');
    }
} else {
    header("Location: ../index.php");
    exit();
}
?>


