<?php

require_once ("Interfaces/IBookStatusService.php");
require_once ("SoapService.php");

class BookStatusService
{

    private $client;

    public function __construct()
    {
        $this->client = SoapService::create("BookStatus");
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