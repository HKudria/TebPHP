<?php
include_once('core/db.php');

function categoryAll() : array{
    $sql = "SELECT * FROM categoryes";
    $query = dbQuery($sql);
    return $query->fetchAll();
}