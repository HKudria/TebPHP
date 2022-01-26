<?php
include_once('../model/messages.php');
include_once('../model/db.php');

$id = checkID($_GET['id']?? '');
if ($id){
    if($_GET['id']!=$id){
        header("Location: ../delete.php?id=$id");
        exit();
    }
    messagesDelete($id);
    header("Location: ../index.php");
    exit();
} else {
    header("Location: ../index.php");
    exit();
}




