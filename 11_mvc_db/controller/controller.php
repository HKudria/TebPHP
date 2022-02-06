<?php
require_once 'model/Book.php';

class Controller
{
    public $model;

    public function __construct()
    {
        $this->model =  new User();
    }

    public function invoke()
    {
        if (!isset($_GET['book'])){
            $books = $this->model->getBookDetails();
            require_once 'view/booklist.php';
        } else {
            $books = $this->model->getBook($_GET['book']);
            require_once 'view/viewBook.php';

        }
       return $this->model->getBookDetails();
    }
}
