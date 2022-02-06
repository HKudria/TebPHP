<?php
require_once 'Book.php';

class Model
{
    public function getBookDetails()
    {
       $test = array(
            "test1" => new User('Ja','jest', 'groot'),
            "test2" => new User('laravel','ja', 'php 8'),
            "test3" => new User('laravel','jaja', 'php 8 ja')
        );
        return $test;
    }

    public function getBook($title)
    {
        $booksWithTitle = array();
        $allBooks = $this->getBookDetails();
        foreach ($allBooks as $book){
            if ($book->title == $title){
                $booksWithTitle[] = $book;
            }
        }
        return $booksWithTitle;
    }
}