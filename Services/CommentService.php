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
        if(isset($responce->GetCommentByBookResult->CommentEntity)){
            if(is_array($responce->GetCommentByBookResult->CommentEntity)){
                foreach($responce->GetCommentByBookResult->CommentEntity as $comment){
                    $comments[] = new Comment($comment);
                }
            }else{
                $comments[] = new Comment($responce->GetCommentByBookResult->CommentEntity);
            }
        }

        return $comments;
    }
}