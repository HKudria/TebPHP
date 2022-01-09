<?php
session_start();
require_once 'connect.php';
if (!empty($_POST)){

    if (preg_match("/^[a-zzżźćńółęąśŻŹĆĄŚĘŁÓŃ]{2,12}$/i", $_POST['company'])){
        $company = trim($_POST['company']);
        $_SESSION['form']['company'] = $company;
    } else {
        $_SESSION['message']['0'] = "Your company name isn't correct. Please check your company name and try again";
    }

    if (preg_match("/^\w+\.?+-?+\w+@\w+\.[a-z]{2,5}$/i", $_POST['email'])){
        $email = trim($_POST['email']);
        $_SESSION['form']['email'] = $email;
    } else {
        $_SESSION['message']['1'] = "Your email isn't correct. Please check your email and try again";
    }

    if(mb_strlen($_POST['comment'])>20){
        $newComment = $_POST['comment'];
        $_SESSION['form']['comment'] = $newComment;
    } else {
        $_SESSION['message']['2'] = "Your comments is too short. You should write more than 20 symbols";
    }


    if (isset($_SESSION['message'])) {
        header('location: ./');
        die();
    }


    if(!empty($newComment)&&!empty($email)&&!empty($company)&&!empty($_POST['protect'])){
            if($_POST['protect']==2){
                $sql = "INSERT INTO comments (company, email, comment) VALUES (?,?,?)";
                $stmt= $db->prepare($sql);
                $stmt->execute([$company, $email, $newComment]);
                unset($_SESSION['form']);
                header('location: ./');
                die();

            } else {
                $_SESSION['message'] = "Please check protection. Your answer isn't correct";
                header('location: ./');
                die();
            }
    }else {
        $_SESSION['message'] = "Please complete all fields";
        header('location: ./');
    }
}
?>