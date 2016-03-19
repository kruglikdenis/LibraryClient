<?php

require_once ("Services/SoapService.php");
require_once ("Common/Connector.php");

\Common\Connector::connectAllFilesInDirectory("Entities");

use Entities\Role;


switch ($_REQUEST["method"]) {

    case "login":
        $userService = SoapService::create("User") ;
        $role = new Role("User") ;
        $user = $userService->GetUserByLoginAndPassword(["login"=>$_REQUEST["login"],"pass"=>$_REQUEST["password"],"role" => $role]);
        var_dump($user) ;
        break;

}