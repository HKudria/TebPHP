<?php
session_start();
require_once 'connect.php';
if (!empty($_POST)){

    if (preg_match("/^[a-zzżźćńółęąśŻŹĆĄŚĘŁÓŃ]{2,12}$/i", $_POST['company'])){
        $company = trim($_POST['company']);
        $_SESSION['form']['company'] = $company;
    } else {
        $_SESSION['message']['en']['0'] = "Your company name isn't correct. Please check your company name and try again";
        $_SESSION['message']['pl']['0'] = "Nazwa Twojej firmy nie jest poprawna. Proszę sprawdzić nazwę firmy i spróbować ponownie";
    }

    if (preg_match("/^\w+\.?+-?+\w+@\w+\.[a-z]{2,5}$/i", $_POST['email'])){
        $email = trim($_POST['email']);
        $_SESSION['form']['email'] = $email;
    } else {
        $_SESSION['message']['en']['1'] = "Your email isn't correct. Please check your email and try again";
        $_SESSION['message']['pl']['1'] = "Twój e-mail jest nieprawidłowy. Proszę sprawdzić swój email i spróbować ponownie";
    }

    if(mb_strlen($_POST['comment'])>20){
        $newComment = htmlentities($_POST['comment']);
        $_SESSION['form']['comment'] = $newComment;
    } else {
        $_SESSION['message']['en']['2'] = "Your comments is too short. You should write more than 20 symbols";
        $_SESSION['message']['pl']['2'] = "Twój komentarz jest zbyt krótki. Powinieneś napisać więcej niż 20 symboli";
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
                $_SESSION['message']['en']['3'] = "Please check protection. Your answer isn't correct";
                $_SESSION['message']['pl']['3'] = "Proszę sprawdzić capctcze Twoja odpowiedź nie jest poprawna";
                header('location: ./');
                die();
            }
    }else {
        $_SESSION['message']['en']['4'] = "Please complete all fields";
        $_SESSION['message']['pl']['4'] = "Proszę wypełnić wszystkie pola";
        header('location: ./');
    }
} else {
    header('Location: ./index.php');
}
?>