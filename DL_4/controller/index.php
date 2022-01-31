<?php

include_once('model/messages.php');
$title = 'Main page';

if($messages = messagesAll()){
    include('view/_index.php');
} else {
   error404();
}

?>

