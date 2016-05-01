<?php

require_once ("Interfaces/ILibraryCardService.php");
require_once ("SoapService.php");

use Entities\LibraryCard;
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
            foreach($responce->GetAllLibraryCardEntitiesResult as $libraryCard){
                $libraryCards[] = new LibraryCard($libraryCard);
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
}