<?php
require_once 'model/User.php';
require_once 'model/Role.php';

class Controller
{
    public $user;

    public function __construct()
    {
        $this->user =  new User();
    }

    public function index()
    {
        require_once 'view/index.php';
    }

    public function userList(){
        if((isset($_SESSION['role'])&&($_SESSION['role'] ?? '' ) == 'admin')){
            $allUser = $this->user->getAllUser();
            require_once 'view/userList.php';
        } else {
            $_SESSION['message']='Nie masz uprawnień';
            header('location: ./');
        }

    }

    public function register()
    {
        $role = new Role();
        $allRole = $role->getAllRole();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $fields = $this->extractField($_POST,['name','surname','mail','pass','city','role']);
            $err = $this->validateFields($fields);
            if(empty($validateError)){
                $err[] = $this->user->registerUser($fields);
            }
        }

        require_once 'view/register.php';
    }

    public function update($id)
    {
        $fields = array();
       $user = $this->user->getOneUser($id);
       foreach ($user as $key => $value){
           $fields[$key] = $value;
       }

       if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $fields = $this->extractField($_POST,['mail','pass','city']);
            $fields['name'] = $user->name;
            $fields['id'] = $user->id;
            $err = $this->validateFields($fields);
            if(empty($validateError)){
                $err[] = $this->user->updateUser($fields);
                if($err){
                    $_SESSION['message']='Użytkownik zmodyfikowany';
                    header('location: ./');
                }
            }
        }

        require_once 'view/update.php';

    }

    public function delete($id)
    {

        $result = $this->user->deleteUser($id);
        if($result){
            $_SESSION['message']='Użytkownik wycofany z systemu';
        }
        header('location: ./');
    }


    public function logout()
    {
      session_destroy();
        $_SESSION['message']='Użytkownik wylogowany';
        header('location: ./');
    }

    public function login()
    {
        $err = array();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $data = $this->user->loginUser($_POST['mail']);
            if (!empty($data['user'])){
                $user = $data['user'];

                //if($user->pass == $_POST['pass']){
                if(password_verify($_POST['pass'], $user->pass)){
                    $_SESSION['name'] = $user->name;
                    $_SESSION['role'] = $user->role;
                   header('location: ./');
                } else {
                    $err = 'Nie prawidlowy login lub haslo';
                }

            } else {
                $err[] = $data['err'];
            }
        }
        require_once 'view/login.php';
    }

    function extractField(array $arrayWithData, array $fields) : array
    {
        $result = [];
        foreach ($fields as $field)
        {
            $result[$field] = trim($arrayWithData[$field]);
        }
        return $result;
    }

    function validateFields(&$fields) : array
    {
        $err = [];
        foreach ($fields as $field) {
            if ($field === '') {
                $err[] = 'Wypelnij wszytkie pola!';
            }
        }
        if(mb_strlen($fields['name'])<2){
            $err[] = 'Imię za krótkie';
        }

        foreach ($fields as $key => $field) {
            $fields[$key] = htmlentities($field);
        }

        return $err;
    }
}
