<?php
// http://phpfaq.ru/pdo -- useful information about PDO
//correct connect to database
$host = '127.0.0.1';
$db   = 'test';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$db = new PDO($dsn, $user, $pass, $opt);

//prepare sql query
$email =''; //variable for test
$stmt = $db->prepare('SELECT name FROM users WHERE email = ?'); //special char
$stmt->execute(array($email));

$stmt = $db->prepare('SELECT name FROM users WHERE email = :email'); //alias for variable
$stmt->execute(array('email' => $email));

//get data from DB with prepared variables
$stmt = $db->prepare('SELECT name FROM users WHERE email = ?');
$stmt->execute([$_GET['email']]);
foreach ($stmt as $row)
{
    echo $row['name'] . "\n";
}

//fetch_lazy this method saves memory
FETCH_LAZY:
$stmt = $db->prepare('SELECT name FROM users WHERE email = ?');
$stmt->execute([$_GET['email']]);
while ($row = $stmt->fetch(PDO::FETCH_LAZY))
{
    echo $row[0] . "\n";
    echo $row['name'] . "\n";
    echo $row->name . "\n";
}

//method for get only one column from table
$stmt = $db->prepare("SELECT name FROM table WHERE id=?");
$stmt->execute(array(1));
$name = $stmt->fetchColumn();

//when you prepare sql with LIMIT u need bind value with PDO::PARAM_INT) or take off ATTR_EMUALTE_PREPARES
$db->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
//------------------------
$limit = 10;
$stm = $db->prepare('SELECT * FROM table LIMIT ?');
$stm->bindValue(1, $limit, PDO::PARAM_INT);
$stm->execute();
$data = $stm->fetchAll();

