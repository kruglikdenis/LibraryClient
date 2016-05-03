<?php

namespace Entities {

    class BookStatus
    {
        private $StatusOfBook ;
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