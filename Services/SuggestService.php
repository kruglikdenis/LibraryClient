<?php

require_once ("Interfaces/ISuggestService.php");
require_once ("SoapService.php");


class SuggestService implements ISuggestService
{
    private $client;

    public function __construct()
    {
        $this->client = SoapService::create("Suggest");
    }

    public function CreateProposal($suggest)
    {
        $this->client->CreateProposal(array("proposal"=>$suggest));
    }
}