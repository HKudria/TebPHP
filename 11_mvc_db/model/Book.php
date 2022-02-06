<?php

require_once 'env.php';
class Book
{
    public $title;
    public $author;
    public $description;

    public function __construct($title='',$author='',$description='')
    {
        $this->title=$title;
        $this->author=$author;
        $this->description=$description;
    }

    public function getBookDetails()
    {
        $allBooks = array();
       $sql = "SELECT * FROM books";
       $result = DataBase::dbInstance()->query($sql);
       foreach ($result->fetchAll() as $book){
           $allBooks[] = new User($book['title'],$book['author'],$book['description']);

       }
       return $allBooks;
    }

    public function getBook($title)
    {
        $allBooks = array();
        $sql = "SELECT * FROM books WHERE title = :title";
        $result = DataBase::dbInstance()->prepare($sql);
        $result->execute(['title' => $title]);
        foreach ($result->fetchAll() as $book){
            $allBooks[] = new User($book['title'],$book['author'],$book['description']);
        }
        return $allBooks;
    }
}