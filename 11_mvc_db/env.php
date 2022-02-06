<?php

const DB_HOST = 'localhost';
const DB_BASE = 'dl5';
const DB_USER = 'root';
const DB_PASS = 'root';

class DataBase
{

    public static function dbInstance(): PDO
    {
        static $db;
        if ($db === null) {
            $db = new PDO('mysql:dbname=' . DB_BASE . ';host=' . DB_HOST . ';port=3306;charset=utf8', DB_USER, DB_PASS);
        }
        return $db;
    }

}
