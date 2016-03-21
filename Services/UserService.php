<?php

require_once ("Interfaces/IUserService.php");
require_once ("SoapService.php");

use Entities\User;

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
            new User($responce->GetUserByLoginAndPasswordResult) : null;
    }

    public function Create(User $user)
    {
        $responce = $this->client->Create(["user" => $user]) ;
        var_dump( $responce);

    }
}