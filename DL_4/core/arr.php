<?php

function extractField(array $arrayWithData, array $fields) : array
{
    $result = [];

    foreach ($fields as $field)
    {
        $result[$field] = trim($arrayWithData[$field]);
    }

    return $result;
}

