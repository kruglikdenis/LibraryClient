<?php


class SoapCatalog
{
    private static $catalog = [
        "User" => "http://localhost:64659/Realization/UserController.svc?wsdl",
        "Book" => "http://localhost:64659/Realization/BookController.svc?wsdl",
        "Suggest" => "http://localhost:64659/Realization/ProposalController.svc?wsdl",
        "Comment" => "http://localhost:64659/Realization/CommentController.svc?wsdl",
        "LibraryCard" => "http://localhost:64659/Realization/LibraryCardController.svc?wsdl",
        "BookStatus" => "http://localhost:64659/Realization/BookStatusController.svc?wsdl",
        "Stylistic" => "http://localhost:64659/Realization/StylisticController.svc?wsdl",
        "Genre" => "http://localhost:64659/Realization/GenreController.svc?wsdl",
        "Annotation" => "http://localhost:64659/Realization/AnnotationController.svc?wsdl",
        "Author" => "http://localhost:64659/Realization/AuthorController.svc?wsdl",
    ];

    public static function getUrlByClass($class){
        return self::$catalog[$class] ;
    }
}