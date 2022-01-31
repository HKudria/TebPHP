<?php
include_once('model/messages.php');


$title = 'Show article';
$id = checkID($_GET['id']?? '');
if ($id){
    if($_GET['id']!=$id){
        header("Location: ?c=message&id=$id");
        exit();
    }
    if($message = messagesOne($id)){
        //var_dump($message);
        include('view/_massages.php');
    } else {
        error404();
    }
} else {
    error404();
}

?>


