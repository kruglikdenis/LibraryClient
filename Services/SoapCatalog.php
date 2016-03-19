<?php


class SoapCatalog
{
    private static $catalog = [
        "User" => "http://localhost:64659/Realization/UserController.svc?wsdl",
    ];

    public static function getUrlByClass($class){
        return self::$catalog[$class] ;
    }
}