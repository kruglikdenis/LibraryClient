<?php

namespace Entities {

    class Annotation
    {
        private $Id;
        private $AuthorId;
        private $BookId;

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

        public function setAuthorId($authorId)
        {
            $this->AuthorId = $authorId;
        }

        public function getBookId()
        {
            return $this->BookId;
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