<?php

require_once ("Interfaces/ISoapService.php");
require_once ("SoapCatalog.php");


class SoapService implements ISoapService
{
    public static function create($class)
    {

        $client = new SoapClient(SoapCatalog::getUrlByClass($class),array("trace" => 1, "exceptions" => 0));
        return $client;
    }
}