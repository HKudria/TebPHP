<?php

function checkControllerName(string $name) : bool {
    return !!preg_match('/^[a-z0-9_]+$/',$name); //!! equal (bool)
}

function template(string $path, array $vars=[]) : string
{
    $fullPath = "view/_$path.php";
    extract($vars);
    include ($fullPath);
    return '';
}