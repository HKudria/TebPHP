<?php

require_once 'env.php';
class User
{
    public $name;
    public $surname;
    public $mail;
    public $city;
    public $idRole;
    public $pass;
    public $role;
    public $id;

    public function __construct($id='',$name='',$surname='',$mail='',$city='',$role='',$pass='',$idRole='')
    {
        $this->id=$id;
        $this->name=$name;
        $this->surname=$surname;
        $this->mail=$mail;
        $this->city=$city;
        $this->role=$role;
        $this->idRole=$idRole;
        $this->pass=$pass;
    }

    public function getAllUser()
    {
        $allUsers = array();
       $sql = "SELECT * FROM user INNER JOIN uprawniena ON user.uprawnienia = uprawniena.id_role";
       $result = DataBase::dbInstance()->query($sql);
       foreach ($result->fetchAll() as $user){
           $allUsers[] = new User($user['id'],$user['imie'],$user['nazwisko'],$user['mail'],$user['miasto'],$user['uprawnienia'],$user['haslo'],$user['role']);
       }
       return $allUsers;
    }

    public function getOneUser($id)
    {
        $sql = "SELECT * FROM user INNER JOIN uprawniena ON user.uprawnienia = uprawniena.id_role WHERE id = :id";
        $result = DataBase::dbInstance()->prepare($sql);
        $result->execute(['id'=>$id]);
        $user = $result->fetch();
        return new User($user['id'],$user['imie'],$user['nazwisko'],$user['mail'],$user['miasto'],$user['role'],$user['haslo']);
    }

    public function loginUser($mail)
    {
        $data = array();

        if($this->checkMail($mail)){
            $data['err'] = 'Uzytkonik nie istnije';
        } else {
            $sql = "SELECT * FROM user INNER JOIN uprawniena ON user.uprawnienia = uprawniena.id_role WHERE user.mail=:mail";
            $result = DataBase::dbInstance()->prepare($sql);
            $result->execute(['mail'=>$mail]);

            $user = $result->fetch();
            $data['user'] = new User($user['id'],$user['imie'],$user['nazwisko'],$user['mail'],$user['miasto'],$user['role'],$user['haslo']);
            $data['err'] = '';
        }
        return $data;

    }

    public function registerUser($userField)
    {
        if($this->checkMail($userField['mail'])){
            $sql = "INSERT INTO user (imie, nazwisko, mail, haslo, miasto, uprawnienia) VALUES (:name,:surname,:mail,:pass,:city,:role);";
            $result = DataBase::dbInstance()->prepare($sql);
            $result->execute([
                'name'=>$userField['name'],
                'surname'=>$userField['surname'],
                'mail'=>$userField['mail'],
                'pass'=>password_hash($userField['pass'],PASSWORD_DEFAULT),
                'city'=>$userField['city'],
                'role'=>$userField['role']
            ]);
            if($this->dbCheckError($result)){
                $_SESSION['message']='Użytkownik zarejestrowany';
                header('location: ./?c=login');
            };
        } else {
            return $err[] = 'Taki mail już zarejestrowany';
        }

    }

    public function checkMail($mail) : bool
    {
        $sql = "SELECT count(id) FROM user WHERE user.mail = :mail";
        $result = DataBase::dbInstance()->prepare($sql);
        $result->execute([
            'mail'=>$mail,
        ]);
        $count = $result->fetch();
        if ($count[0]==0){
            return true;
        } else {
            return false;
        }

    }

    public function updateUser($fields)
    {

        $sql = "UPDATE user SET mail = :mail, haslo = :pass, miasto = :city WHERE user.id = :id; ";
        $result = DataBase::dbInstance()->prepare($sql);
        $result->execute([
            'mail'=>$fields['mail'],
            //'pass'=>$fields['pass'],
            'pass'=>password_hash($fields['pass'],PASSWORD_DEFAULT),

            'city'=>$fields['city'],
            'id'=>$fields['id']
        ]);
        return $this->dbCheckError($result);
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM user WHERE user.id = :id;";
        $result = DataBase::dbInstance()->prepare($sql);
        $result->execute([
            'id'=>$id
        ]);
        return $this->dbCheckError($result);
    }

    function dbCheckError(PDOStatement $query) : bool{
        $errInfo = $query->errorInfo();

        if($errInfo[0] !== PDO::ERR_NONE){
            echo $errInfo[2];
            exit();
        }
        return true;
    }
}