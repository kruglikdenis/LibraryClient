<?php

require_once ("Services/UserService.php");
require_once ("Common/Connector.php");

\Common\Connector::connectAllFilesInDirectory("Entities");

session_start();

switch ($_REQUEST["method"]) {

    case "login":
        $userService = new UserService() ;
        $user = $userService->GetUserByLoginAndPassword($_REQUEST["login"],$_REQUEST["password"]);
        if(isset($user)){
            $_SESSION["userLogin"] = $user->getLogin();
            echo json_encode(['isLogin'=>true]);
        }else{
            echo json_encode(['isLogin'=>false, "message"=>"Неверный логин или пароль"]);
        }
        break;

    case "logout":
        unset($_SESSION["userLogin"]);
        echo json_encode(['isLogout'=>true]);
        break;

}