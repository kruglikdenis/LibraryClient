<?php

namespace Entities {

    class LibraryCard
    {
        private $BookId;
        private $UserId;
        private $Id;
        private $BookStatusId;
        private $IsLike;

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

        /**
         * @return mixed
         */
        public function getBookStatusId()
        {
            return $this->BookStatusId;
        }

        /**
         * @param mixed $BookStatusId
         */
        public function setBookStatusId($BookStatusId)
        {
            $this->BookStatusId = $BookStatusId;
        }

        /**
         * @return mixed
         */
        public function getIsLike()
        {
            return $this->IsLike;
        }

        /**
         * @param mixed $IsLike
         */
        public function setIsLike($IsLike)
        {
            $this->IsLike = $IsLike;
        }



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