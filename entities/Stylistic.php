<?php

namespace Entities {

    class Stylistic
    {
        private $GenreId;
        private $BookId;
        private $Id;

        public function __construct($params = array())
        {
            $this->Id = 0;
            $properties = get_object_vars($this);
            foreach($properties as $keyProperty => $property){
                if (isset($params->$keyProperty)){
                    $this->$keyProperty = $params->$keyProperty;
                }
            }
        }

        public function toArray(){
            $properties = get_object_vars($this);
            $arr = array();
            foreach($properties as $keyProperty => $property){
                $arr[$keyProperty] = $property;
            }
            return $arr;
        }

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