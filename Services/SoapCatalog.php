<?php


class SoapCatalog
{
    private static $catalog = [
        "User" => "http://localhost:64659/Realization/UserController.svc?wsdl",
        "Book" => "http://localhost:64659/Realization/BookController.svc?wsdl",
        "Suggest" => "http://localhost:64659/Realization/ProposalController.svc?wsdl",
    ];

    public static function getUrlByClass($class){
        return self::$catalog[$class] ;
    }
}