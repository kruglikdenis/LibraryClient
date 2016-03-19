<?php

namespace Entities {

    class Stylistic
    {
        private $GenreId;
        private $BookId;
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

        public function getGenreId()
        {
            return $this->GenreId;
        }

        public function setBookId($BookId)
        {
            $this->BookId = $BookId;
        }


        public function setGenreId($GenreId)
        {
            $this->GenreId = $GenreId;
        }
    }
}