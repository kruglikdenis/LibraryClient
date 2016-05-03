<?php

require_once(__DIR__."/../Services/BookService.php");
require_once (__DIR__."/Interfaces/IBookController.php");
require_once (__DIR__."/../Entities/Book.php");
require_once 'smarty/libs/Smarty.class.php';


use Entities\Book;

class BookController implements IBookController
{

    private $bookService;
    private $annotationService;
    private $authorService;
    private $stylisticService;
    private $genreService;

    public function __construct()
    {
        $this->libraryCardService = new LibraryCardService();
        $this->bookService = new BookService();
        $this->annotationService = new AnnotationService();
        $this->stylisticService = new StylisticService();
        $this->authorService = new AuthorService();
        $this->genreService = new GenreService();
    }

    public function update($book)
    {
        $this->bookService->UpdateBook($book);
    }

    public function getBookById()
    {
        return $this->bookService->GetBookById($_REQUEST["id"]);
    }

    public function incDownloads()
    {
        $book = $this->getBookById();
        $book->setNumberOfDownloads($book->getNumberOfDownloads()+1);
        $this->update($book);
    }

    public function searchBook()
    {
        $_SESSION["searchBookName"] = isset($_REQUEST["bookName"])? $_REQUEST["bookName"] : "";
        $books = (empty($_REQUEST["bookName"]))? $this->bookService->GetAllBookEntities() :
            $this->bookService->SearchBook($_REQUEST["bookName"]);
        $stylistics = $this->stylisticService->GetAllStylistics();
        $libraryCards = $this->libraryCardService->GetAllLibraryCardEntities();
        $user = (isset($_SESSION["user"])) ? unserialize($_SESSION["user"]) : null;
        $annotations = $this->annotationService->GetAllAnnotations();
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
                    $genre = $this->genreService->GetGenreById($stylistic->getGenreId());
                    $genres[] = $genre->toArray();
                }
            }
            $bookArray[$book->getId()]["genres"] = $genres;
            $authors = array();
            foreach($annotations as $annotation){
                if($annotation->getBookId()==$book->getId()){
                    $author = $this->authorService->GetAuthorById($annotation->getAuthorId());
                    $authors[] = $author->toArray();
                }
            }
            $bookArray[$book->getId()]["authors"] = $authors;
        }
        $smarty = new Smarty;
        $smarty->assign("books", $bookArray) ;
        echo $smarty->fetch("views/partial/inc_books.tpl");
    }
}