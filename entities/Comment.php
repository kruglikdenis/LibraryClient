<?php

namespace Entities {

    class Comment
    {
        private $Text ;
        private $UserId;
        private $BookId;
        private $DatePublication;
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