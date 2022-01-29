<?php

include_once('model/messages.php');
include_once('model/errors.php');
if($messages = messagesAll()){
    include('view/_index.php');
} else {
   error404();
}

?>

