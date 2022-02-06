<?php
session_start();
require_once './controller/controller.php';

$controller = new Controller();

$cname = $_GET['c'] ?? 'index';
$id = $_GET['id']??'';



?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="pl">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Zaliczenia</title>
    <link rel="stylesheet" href="./asset/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/style.css">
</head>
<body>
<header class="site-header">
    <div class="container">Header</div>
</header>

    <div class="row">
        <aside class="col col-3 left">
            <table class="table">

           <?php if(!isset($_SESSION['name'])){
              echo "<tr><td><a href=\"?c=register\">Rejestracja</a></td></tr>";
               echo "<tr><td><a href=\"?c=login\">Logowanie</a></td></tr>";
           } ?>
           <?php if(isset($_SESSION['role'])&&($_SESSION['role'] ?? '' ) == 'admin'){
               echo "<tr><td><a href=\"?c=userList\">Użytkonicy</a></td></tr>";
           } ?>
           <?php if(isset($_SESSION['name'])){
               echo "<tr><td><a href=\"?c=logout\">Wylogować się</a></td></tr>";
           } ?>

            </table>
        </aside>
        <div class="col col-9 ">

           <?php if(isset($_SESSION['message'])){
               echo <<<MES
                <div class="alert alert-warning" role="alert">
                 $_SESSION[message]
                </div>
MES;

            unset($_SESSION['message']);
            } ?>

            <?php $controller->$cname($id);?>
        </div>
</div>
<footer class="site-footer">
    <div class="container">
        &copy; site about all
    </div>
</footer>
</body>
</html>