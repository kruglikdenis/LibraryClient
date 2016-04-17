<?php
require 'smarty/libs/Smarty.class.php';
require_once ("Common/Connector.php") ;

use Common\Connector ;

Connector::connectAllFilesInDirectory("Entities");
Connector::connectAllFilesInDirectory("Controllers");
Connector::connectAllFilesInDirectory("Services");

session_start();

$smarty = new Smarty;

$bookService = new BookService();

$books = $bookService->GetAllBookEntities();
$bookArray = array();
foreach($books as $book){
    $bookArray[] = $book->toArray();
}
$_SESSION["books"] = $bookArray ;

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