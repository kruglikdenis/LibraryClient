<?php

require_once(__DIR__."/../Services/BookService.php");
require_once (__DIR__."/Interfaces/IBookController.php");
require_once (__DIR__."/../Entities/Book.php");

use Entities\Book;

class BookController implements IBookController
{

    private $bookService;

    public function __construct()
    {
        $this->bookService = new BookService();
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
}