<?php

function categoryAll() : array{
    $sql = "SELECT * FROM categoryes";
    $query = dbQuery($sql);
    return $query->fetchAll();
}