<?php
require_once ("Interfaces/IStylisticService.php");
require_once ("SoapService.php");

use Entities\Stylistic;

class StylisticService implements IStylisticService
{
    private $client;

    public function __construct()
    {
        $this->client = SoapService::create("Stylistic");
    }

    public function GetAllStylistics()
    {
        $responce = $this->client->GetAllStylisticEntities();
        $stylistics = array();
        if(is_array($responce->GetAllStylisticEntitiesResult->StylisticEntity)){
            foreach($responce->GetAllStylisticEntitiesResult->StylisticEntity as $stylistic){
                $stylistics[] = new Stylistic($stylistic);
            }
        }else{
            $stylistics[] = new Stylistic($responce->GetAllStylisticEntitiesResult->StylisticEntity);
        }
        return $stylistics;
    }
}