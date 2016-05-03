<?php

require_once(__DIR__."/../Services/CommentService.php");
require_once(__DIR__."/../Services/UserService.php");
require_once (__DIR__."/Interfaces/ICommentController.php");
require_once (__DIR__."/../Entities/Comment.php");
require_once (__DIR__."/../Entities/Book.php");

use Entities\Comment;
use Entities\Book;

class CommentController implements ICommentController
{

    private $commentService;
    private $userService;

    public function __construct()
    {
        $this->commentService = new CommentService();
        $this->userService = new UserService();
    }

    public function createComment()
    {
        $comment = new Comment();
        $user = unserialize($_SESSION['user']);
        $date = new DateTime(date('Y-m-d H:i:s'));
        $comment->setDatePublication($date->format("c"));
        $comment->setUserId($user->getId());
        $comment->setBookId($_REQUEST['bookId']);
        $comment->setText($_REQUEST['text']);
        $this->commentService->createComment($comment);
    }

    public function getCommentByBook()
    {
        $book = new Book();
        $book->setId($_REQUEST["bookId"]);
        $comments = $this->commentService->getCommentByBook($book);
        $commentsArr = array();
        foreach($comments as $comment){
            $commentsArr[$comment->getId()] = $comment->toArray();
            $user = $this->userService->GetUserById($comment->getUserId());
            $commentsArr[$comment->getId()] = array_merge($commentsArr[$comment->getId()], $user->toArray());
        }
        echo json_encode(array("data"=>$commentsArr));
    }
}