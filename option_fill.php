<?php

require_once("Services/UserService.php");
require_once("Common/Connector.php");

\Common\Connector::connectAllFilesInDirectory("Entities");
\Common\Connector::connectAllFilesInDirectory("Controllers");

session_start();

$controller = new $_REQUEST["controller"]();

$execute = $_REQUEST["action"];

$controller->$execute();