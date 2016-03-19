<?php
namespace Entities {

    class Book
    {
        private $BookName;
        private $BookStatusId;
        private $Id;

        public function setId($id)
        {
            $this->Id = $id;
        }

        public function getId()
        {
            return $this->Id;
        }

        public function getBookName()
        {
            return $this->BookName;
        }

        public function getBookStatusId()
        {
            return $this->BookStatusId;
        }

        public function setBookName($BookName)
        {
            $this->BookName = $BookName;
        }

        public function setBookStatusId($BookStatusId)
        {
            $this->BookStatusId = $BookStatusId;
        }
    }
}