<?php

require_once ("Interfaces/ILibraryCardService.php");
require_once ("SoapService.php");

use Entities\LibraryCard;
use Entities\Book;

class LibraryCardService implements ILibraryCardService
{

    private $client;

    public function __construct()
    {
        $this->client = SoapService::create("LibraryCard");
    }

    public function GetAllLibraryCardEntities()
    {
        $responce = $this->client->GetAllLibraryCardEntities();
        $libraryCards = array();
        if(isset($responce->GetAllLibraryCardEntitiesResult->LibraryCardEntity)){
            if(is_array($responce->GetAllLibraryCardEntitiesResult->LibraryCardEntity)){
                foreach($responce->GetAllLibraryCardEntitiesResult->LibraryCardEntity as $libraryCard){
                    $libraryCards[] = new LibraryCard($libraryCard);
                }
            }else{
                $libraryCards[] = new LibraryCard($responce->GetAllLibraryCardEntitiesResult->LibraryCardEntity);
            }
        }
        return $libraryCards;
    }

    public function UpdateLibraryCard($libraryCard)
    {
        $this->client->UpdateLibraryCard(array("libraryCard"=>$libraryCard));
    }

    public function CreateLibraryCard($libraryCard)
    {
        $this->client->CreateLibraryCard(array("libraryCard"=>$libraryCard));
    }

    public function GetBookByStatus($bookStatus)
    {
        $responce = $this->client->GetBookByStatus(array("bookStatus"=>$bookStatus));
        $books = array();
        if(isset($responce->GetBookByStatusResult->BookEntity)){
            if(is_array($responce->GetBookByStatusResult->BookEntity)){
                foreach($responce->GetBookByStatusResult->BookEntity as $book){
                    $books[] = new Book($book);
                }
            }else{
                $books[] = new Book($responce->GetBookByStatusResult->BookEntity);
            }
        }
        return $books;
    }
}