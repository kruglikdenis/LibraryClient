<?php
require 'smarty/libs/Smarty.class.php';
require_once ("Common/Connector.php") ;

use Common\Connector ;


Connector::connectAllFilesInDirectory("Entities") ;

$smarty = new Smarty;

$smarty->display("views/index.tpl");

/*
use Entities\Role ;

try {
    $client = new SoapClient('http://localhost:64659/Realization/RoleController.svc?wsdl',array("trace" => 1, "exceptions" => 0));
    $role = new Role();
    $role->setId(3);
    $role->setName(4);

    $client->CreateRole(array("role"=>$role));

} catch (Exception $e) {

    print 'Caught exception: '.  $e->getMessage(). "\n";

}
*/