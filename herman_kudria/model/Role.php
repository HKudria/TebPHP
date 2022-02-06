<?php
require_once 'env.php';

class Role
{
    public $id, $role;

    public function __construct($id='',$role='')
    {
       $this->id = $id;
       $this->role = $role;
    }

    public function getAllRole() : array
    {
        $allRole = array();
        $sql = "SELECT * FROM uprawniena ";
        $result = DataBase::dbInstance()->query($sql);
        foreach ($result->fetchAll() as $role){
            $allRole[] = new Role($role['id_role'],$role['role']);

        }
        return $allRole;
    }
}