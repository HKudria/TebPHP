<?php

include_once('model/messages.php');
if(($messages = messagesAll()) !== null){
    include('view/_index.php');
} else {
    include('view/_error.php');
}

?>

