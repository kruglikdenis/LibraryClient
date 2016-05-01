<?php

interface ICommentService
{
    public function createComment($comment);

    public function getCommentByBook($book);
}