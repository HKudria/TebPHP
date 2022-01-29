<?php

function error404()
{
    header("HTTP/1.1 404 Not Found");
    include('./view/errors/_404.php');
    exit();
}