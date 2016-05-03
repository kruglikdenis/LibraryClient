<?php

interface ILibraryCardService
{
    public function GetAllLibraryCardEntities();

    public function UpdateLibraryCard($libraryCard);

    public function GetBookByStatus($bookStatus);
}