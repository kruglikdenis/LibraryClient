<?php


interface ILibraryCardController
{
    public function setRating();

    public function setBookStatusId();

    public function getBooksByStatus();
}