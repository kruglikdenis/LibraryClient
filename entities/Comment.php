<?php

namespace Entities {

    class Comment
    {
        private $Text ;
        private $UserId;
        private $BookId;
        private $DatePublication;
        private $Id;

        public function setId($id)
        {
            $this->Id = $id;
        }

        public function getId()
        {
            return $this->Id;
        }


        public function getBookId()
        {
            return $this->BookId;
        }

        public function getDatePublication()
        {
            return $this->DatePublication;
        }

        public function getText()
        {
            return $this->Text;
        }

        public function getUserId()
        {
            return $this->UserId;
        }

        public function setDatePublication($DatePublication)
        {
            $this->DatePublication = $DatePublication;
        }

        public function setBookId($BookId)
        {
            $this->BookId = $BookId;
        }

        public function setText($Text)
        {
            $this->Text = $Text;
        }

        public function setUserId($UserId)
        {
            $this->UserId = $UserId;
        }

    }
}