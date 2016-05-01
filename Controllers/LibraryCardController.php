<?php
require_once(__DIR__."/../Services/LibraryCardService.php");
require_once(__DIR__."/../Services/BookService.php");
require_once (__DIR__."/Interfaces/ILibraryCardController.php");
require_once (__DIR__."/../Entities/LibraryCard.php");
require_once (__DIR__."/../Entities/Book.php");
require_once (__DIR__."/../Entities/User.php");

use Entities\LibraryCard;
use Entities\Book;
use Entities\User;

class LibraryCardController implements ILibraryCardController
{

    private $libraryCardService;
    private $bookService;

    public function __construct()
    {
        $this->libraryCardService = new LibraryCardService();
        $this->bookService = new BookService();
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
        var_dump($libraryCardUpd);
        $this->libraryCardService->UpdateLibraryCard($libraryCardUpd);
        $book = $this->bookService->GetBookById($bookId);
        $book->setNumberOfLikes($book->getNumberOfLikes()+1);
        $book->setRating($book->getRating()+$_REQUEST["rating"]);
        $this->bookService->UpdateBook($book->toArray());
    }
}