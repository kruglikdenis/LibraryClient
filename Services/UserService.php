<?php

require_once ("Interfaces/IUserService.php");
require_once ("SoapService.php");

class UserService implements IUserService
{
    private $client;

    public function __construct()
    {
        $this->client = SoapService::create("User");
    }

    public function GetUserByLoginAndPassword($login, $password)
    {
        $role = new \Entities\Role("User") ;
        $responce = $this->client->GetUserByLoginAndPassword(["login"=>$login,"pass"=>$password,"role" => $role]);
        return (isset($responce->GetUserByLoginAndPasswordResult)) ?
            new \Entities\User($responce->GetUserByLoginAndPasswordResult) : null;
    }
}