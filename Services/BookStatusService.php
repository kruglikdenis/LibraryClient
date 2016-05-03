<?php

require_once ("Interfaces/IBookStatusService.php");
require_once ("SoapService.php");

use Entities\BookStatus;

class BookStatusService implements IBookStatusService
{

    private $client;

    public function __construct()
    {
        $this->client = SoapService::create("BookStatus");
    }

    public function GetAllBookStatusEntities()
    {
        $responce = $this->client->GetAllBookStatusEntities();
        $booksStatuses = array();
        foreach($responce->GetAllBookStatusEntitiesResult->BookStatusEntity as $bookStatus){
            $booksStatuses[] = new BookStatus($bookStatus);
        }
        return $booksStatuses;
    }


}