<?php
require_once(__DIR__."/../Services/LibraryCardService.php");
require_once(__DIR__."/../Services/AnnotationService.php");
require_once(__DIR__."/../Services/AuthorService.php");
require_once(__DIR__."/../Services/StylisticService.php");
require_once(__DIR__."/../Services/GenreService.php");
require_once(__DIR__."/../Services/BookService.php");
require_once (__DIR__."/Interfaces/ILibraryCardController.php");
require_once (__DIR__."/../Entities/LibraryCard.php");
require_once (__DIR__."/../Entities/Book.php");
require_once (__DIR__."/../Entities/User.php");
require_once (__DIR__."/../Entities/BookStatus.php");
require_once 'smarty/libs/Smarty.class.php';

use Entities\LibraryCard;
use Entities\BookStatus;

class LibraryCardController implements ILibraryCardController
{

    private $libraryCardService;
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


    public function setRating()
    {
        $libraryCards = $this->libraryCardService->GetAllLibraryCardEntities();
        $user = unserialize($_SESSION["user"]);
        $bookId = $_REQUEST["bookId"];
        foreach($libraryCards as $libraryCard){
            if ($libraryCard->getBookId() == $bookId && $libraryCard->getUserId() == $user->getId()){
                $libraryCardUpd = $libraryCard ;
                break;
            }
        }
        if(isset($libraryCardUpd)){
            $libraryCardUpd->setIsLike(true);
        }else{
            $libraryCardUpd = new LibraryCard();
            $libraryCardUpd->setUserId($user->getId());
            $libraryCardUpd->setBookId($bookId);
            $libraryCardUpd->setIsLike(true);
        }
        $this->libraryCardService->UpdateLibraryCard($libraryCardUpd);
        $book = $this->bookService->GetBookById($bookId);
        $book->setNumberOfLikes($book->getNumberOfLikes()+1);
        $book->setRating($book->getRating()+$_REQUEST["rating"]);
        $this->bookService->UpdateBook($book->toArray());
        echo json_encode($book->toArray());
    }

    public function setBookStatusId()
    {
        $libraryCards = $this->libraryCardService->GetAllLibraryCardEntities();
        $user = unserialize($_SESSION["user"]);
        $bookId = $_REQUEST["bookId"];
        foreach($libraryCards as $libraryCard){
            if ($libraryCard->getBookId() == $bookId && $libraryCard->getUserId() == $user->getId()){
                $libraryCardUpd = $libraryCard ;
                break;
            }
        }
        if(isset($libraryCardUpd)){
            $libraryCardUpd->setBookStatusId($_REQUEST["bookStatusId"]);
        }else{
            $libraryCardUpd = new LibraryCard();
            $libraryCardUpd->setUserId($user->getId());
            $libraryCardUpd->setBookId($bookId);
            $libraryCardUpd->setBookStatusId($_REQUEST["bookStatusId"]);
        }
        $this->libraryCardService->UpdateLibraryCard($libraryCardUpd);
    }


    public function getBooksByStatus()
    {
        $bookStatus = new BookStatus();
        $bookStatus->setId($_REQUEST["bookStatusId"]);
        $books = $this->libraryCardService->GetBookByStatus($bookStatus);
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
        echo $smarty->fetch("views/partial/inc_mybooks.tpl");
    }
}