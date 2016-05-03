<?php
require_once ("Interfaces/IAnnotationService.php");
require_once ("SoapService.php");

use Entities\Annotation;

class AnnotationService implements IAnnotationService
{
    private $client;

    public function __construct()
    {
        $this->client = SoapService::create("Annotation");
    }

    public function GetAllAnnotations()
    {
        $responce = $this->client->GetAllAnnotationEntities();
        $annotations = array();
        if(is_array($responce->GetAllAnnotationEntitiesResult->AnnotationEntity)){
            foreach($responce->GetAllAnnotationEntitiesResult->AnnotationEntity as $annotation){
                $annotations[] = new Annotation($annotation);
            }
        }else{
            $annotations[] = new Annotation($responce->GetAllAnnotationEntitiesResult->AnnotationEntity);
        }
        return $annotations;
    }
}