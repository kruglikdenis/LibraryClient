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
        foreach($responce->GetAllBookEntitiesResult->BookEntity as $book){
            $books[] = new Book($book);
        }
        return $books;
    }
}