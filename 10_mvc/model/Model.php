<?php
require_once 'Book.php';

class Model
{
    public function getBookDetails()
    {
       $test = array(
            "test1" => new Book('Ja','jest', 'groot'),
            "test2" => new Book('laravel','ja', 'php 8'),
            "test3" => new Book('laravel','jaja', 'php 8 ja')
        );
        return $test;
    }

    public function getBook($title)
    {
        $booksWithTitle = array();
        $allBooks = $this->getBookDetails();
        foreach ($allBooks as $book){
            if ($book->title == $title){
                $getTitleBook[] = $book;
            }
        }
        return $booksWithTitle;
    }
}