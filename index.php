<?php
require 'smarty/libs/Smarty.class.php';
require_once ("Common/Connector.php") ;

use Common\Connector ;

Connector::connectAllFilesInDirectory("Entities");
Connector::connectAllFilesInDirectory("Controllers");
Connector::connectAllFilesInDirectory("Services");

session_start();

$smarty = new Smarty;
$_SESSION["searchBookName"] = "";

$bookService = new BookService();
$libraryCardService = new LibraryCardService();
$stylisticService = new StylisticService();
$genreService = new GenreService();
$annotationService = new AnnotationService();
$authorService = new AuthorService();

$books = $bookService->GetAllBookEntities();
$libraryCards = $libraryCardService->GetAllLibraryCardEntities();
$stylistics = $stylisticService->GetAllStylistics();
$annotations = $annotationService->GetAllAnnotations();
$user = (isset($_SESSION["user"])) ? unserialize($_SESSION["user"]) : null;
$bookArray = array();
foreach($books as $book){
    $bookArray[$book->getId()] = $book->toArray();
    $bookArray[$book->getId()]["idBook"] = $book->getId();
    if(isset($user)){
        foreach($libraryCards as $libraryCard){
            if ($libraryCard->getBookId() == $book->getId() && $libraryCard->getUserId() == $user->getId()){
                $libraryCardUpd = $libraryCard ;
                break;
            }
        }
    }
    $bookArray[$book->getId()] = (isset($libraryCardUpd)) ? array_merge($bookArray[$book->getId()] , $libraryCardUpd->toArray()) : $bookArray[$book->getId()];
    $genres = array();
    foreach($stylistics as $stylistic){
        if($stylistic->getBookId()==$book->getId()){
            $genre = $genreService->GetGenreById($stylistic->getGenreId());
            $genres[] = $genre->toArray();
        }
    }
    $bookArray[$book->getId()]["genres"] = $genres;
    $authors = array();
    foreach($annotations as $annotation){
        if($annotation->getBookId()==$book->getId()){
            $author = $authorService->GetAuthorById($annotation->getAuthorId());
            $authors[] = $author->toArray();
        }
    }
    $bookArray[$book->getId()]["authors"] = $authors;
}
$smarty->assign("books", $bookArray) ;

$bookStatusService = new BookStatusService();
$bookStatuses = $bookStatusService->GetAllBookStatusEntities();
$bookStatusArray = array();
foreach($bookStatuses as $bookStatus){
    $bookStatusArray[] = $bookStatus->toArray();
}
$_SESSION["bookStatuses"] = $bookStatusArray ;


$smarty->display("views/index.tpl");
