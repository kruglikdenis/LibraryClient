<?php
require_once ("Interfaces/IGenreService.php");
require_once ("SoapService.php");

use Entities\Genre;

class GenreService implements IGenreService
{

    private $client;

    public function __construct()
    {
        $this->client = SoapService::create("Genre");
    }

    public function GetGenreById($id)
    {
        $responce = $this->client->GetGenreById(["id"=>$id]);
        return (isset($responce->GetGenreByIdResult)) ?
            new Genre($responce->GetGenreByIdResult) : null;
    }
}