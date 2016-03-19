<?php

namespace Entities {

    class Annotation
    {
        private $Id;
        private $AuthorId;
        private $BookId;

        public function setAuthorId($authorId)
        {
            $this->AuthorId = $authorId;
        }

        public function getBookId($bookId)
        {
            $this->BookId = $bookId;
        }

        public function getAuthorId()
        {
            return $this->AuthorId;
        }

        public function setBookId($BookId)
        {
            $this->BookId = $BookId;
        }

        public function getId()
        {
            return $this->Id;
        }

        public function setId($Id)
        {
            $this->Id = $Id;
        }

    }
}