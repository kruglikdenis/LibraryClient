<?php

require_once ("Interfaces/ICommentService.php");
require_once ("SoapService.php");


use Entities\Comment;

class CommentService implements ICommentService
{
    private $client;

    public function __construct()
    {
        $this->client = SoapService::create("Comment");
    }

    public function createComment($comment)
    {
        $this->client->CreateComment(array("comment"=>$comment));
    }

    public function getCommentByBook($book)
    {
        $responce = $this->client->GetCommentByBook(array("book"=>$book));
        $comments = array();
        foreach($responce->GetCommentByBookResult->CommentEntity as $comment){
            $comments[] = new Comment($comment);
        }
        return $comments;
    }
}