<?php

require_once (__DIR__."/../../Entities/User.php");

use  Entities\User;


interface IUserService
{
    public function GetUserByLoginAndPassword($login, $password);
    public function Create(User $user);
}