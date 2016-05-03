<?php
require_once ("Interfaces/IAuthorService.php");
require_once ("SoapService.php");

use Entities\Author;

class AuthorService implements IAuthorService
{

    private $client;

    public function __construct()
    {
        $this->client = SoapService::create("Author");
    }

    public function GetAuthorById($id)
    {
        $responce = $this->client->GetAuthorById(["id"=>$id]);
        return (isset($responce->GetAuthorByIdResult)) ?
            new Author($responce->GetAuthorByIdResult) : null;
    }
}