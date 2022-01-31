<?php

function error404()
{
    header( "$_SERVER[SERVER_PROTOCOL] 404 Not Found");
    include('./view/errors/_404.php');
    exit();
}