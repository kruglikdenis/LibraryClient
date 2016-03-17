<?php
require 'smarty/libs/Smarty.class.php';


header('Content-Type: text/plain; charset=utf-8');


include 'DalAnnotation.php';
//$smarty = new Smarty;

//$smarty->display("index.html");

try {
    $client = new SoapClient('http://localhost:64659/Realization/AnnotationController.svc?wsdl',array("trace" => 1, "exceptions" => 0));
    $entity = new DalAnnotation();
    $entity->Id = 1;
    $entity->BookId = 1;
    $entity->AuthorId = 1;

    $client->CreateAnnotation(array("annotation"=>$entity));
    print $client->CreateAnnotationResult;
} catch (Exception $e) {

    print 'Caught exception: '.  $e->getMessage(). "\n";

}
