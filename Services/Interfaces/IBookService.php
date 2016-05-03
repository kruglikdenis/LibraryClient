<?php


interface IBookService{

    public function GetAllBookEntities();

    public function UpdateBook($book);

    public function GetBookById($id);

    public function SearchBook($bookName);

}