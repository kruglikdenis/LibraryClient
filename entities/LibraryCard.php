<?php

namespace Entities {

    class LibraryCard
    {
        private $BookId;
        private $UserId;
        private $Id;

        public function setId($id)
        {
            $this->Id = $id;
        }

        public function getId()
        {
            return $this->Id;
        }

        public function setUserId($UserId)
        {
            $this->UserId = $UserId;
        }

        public function setBookId($BookId)
        {
            $this->BookId = $BookId;
        }

        public function getUserId()
        {
            return $this->UserId;
        }

        public function getBookId()
        {
            return $this->BookId;
        }

    }
}