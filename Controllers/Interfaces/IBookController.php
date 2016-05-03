<?php


interface IBookController
{

    public function update($book);

    public function getBookById();

    public function incDownloads();

    public function searchBook();

}