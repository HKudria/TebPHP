<?php

include_once('model/messages.php');

if($messages = messagesAll()){
    include('view/_index.php');
} else {
   error404();
}

?>

