<?php
require 'smarty/libs/Smarty.class.php';
require_once ("Common/Connector.php") ;

use Common\Connector ;

Connector::connectAllFilesInDirectory("Entities");
Connector::connectAllFilesInDirectory("Controllers");
Connector::connectAllFilesInDirectory("Services");

session_start();

$smarty = new Smarty;

if(isset($_REQUEST["btn_suggest"])){

    $suggestService = new SuggestService();
    $suggest = new \Entities\Proposal();
    $suggest->setMessage($_REQUEST["message"]);
    $date = new DateTime(date('Y-m-d'));
    $suggest->setDatePublication($date->format("c"));
    $user = unserialize($_SESSION["user"]);
    $suggest->setUserId($user->getId());
    $suggestService->CreateProposal($suggest);
    $smarty->display("views/index.tpl");

}