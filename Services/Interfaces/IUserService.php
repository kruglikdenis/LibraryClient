<?php

require_once (__DIR__."/../../Entities/Role.php");


interface IUserService
{
    public function GetUserByLoginAndPassword($login, $password);
}