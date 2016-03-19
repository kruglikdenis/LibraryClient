<?php

namespace Entities {

    class BookStatus
    {
        public $StatusOfBook ;
        private $Id;

        public function setId($id)
        {
            $this->Id = $id;
        }

        public function getId()
        {
            return $this->Id;
        }

        public function getStatusOfBook()
        {
            return $this->StatusOfBook;
        }

        public function setStatusOfBook($StatusOfBook)
        {
            $this->StatusOfBook = $StatusOfBook;
        }

    }
}