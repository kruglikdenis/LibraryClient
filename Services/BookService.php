<?php
require_once ("Interfaces/IBookService.php");
require_once ("SoapService.php");

use Entities\Book;

class BookService implements IBookService
{
    private $client;

    public function __construct()
    {
        $this->client = SoapService::create("Book");
    }

    public function GetAllBookEntities()
    {
        $responce = $this->client->GetAllBookEntities();
        $books = array();
        if(is_array($responce->GetAllBookEntitiesResult->BookEntity)){
            foreach($responce->GetAllBookEntitiesResult->BookEntity as $book){
                $books[] = new Book($book);
            }
        }else{
            $books[] = new Book($responce->GetAllBookEntitiesResult->BookEntity);
        }
        return $books;
    }

    public function UpdateBook($book)
    {
        $this->client->UpdateBook(array("book"=>$book));
    }

    public function GetBookById($id)
    {
        $responce = $this->client->GetBookById(array("id"=>$id));
        return new Book($responce->GetBookByIdResult);
    }

    public function SearchBook($bookName)
    {
        $responce = $this->client->SearchBook(array("searchbook"=>$bookName));
        $books = array();
        if(is_array($responce->SearchBookResult->BookEntity)){
            foreach($responce->SearchBookResult->BookEntity as $book){
                $books[] = new Book($book);
            }
        }else{
            $books[] = new Book($responce->SearchBookResult->BookEntity);
        }
        return $books;
    }
}