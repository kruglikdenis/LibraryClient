<?php

require_once(__DIR__."/../Services/UserService.php");
require_once (__DIR__."/Interfaces/IUserController.php");
require_once (__DIR__."/../Entities/User.php");

use Entities\User;

class UserController implements IUserController
{

    public function login(){
        $userService = new UserService() ;
        $user = $userService->GetUserByLoginAndPassword($_REQUEST["login"],$_REQUEST["password"]);
        if(isset($user)){
            $_SESSION["userLogin"] = $user->getLogin();
            $_SESSION["user"] = serialize($user);
            echo json_encode(['isLogin'=>true]);
        }else{
            echo json_encode(['isLogin'=>false, "message"=>"Неверный логин или пароль"]);
        }
    }

    public function logout(){
        unset($_SESSION["userLogin"]);
        echo json_encode(['isLogout'=>true]);
    }

    public function register()
    {
        $userService = new UserService() ;
        $user = new User();
        $vars = $user->getObjectVars();
        foreach($vars as $key=>$value){
            $setter = 'set'.$key ;
            if($key=='DateOfBirdth'){
                $date = new DateTime($_REQUEST[$key]);
                $user->$setter($date->format('c'));
            }elseif(method_exists($user,$setter) && isset($_REQUEST[$key])){
                $user->$setter($_REQUEST[$key]);
            }
        }
        $userService->Create($user);
    }
}
