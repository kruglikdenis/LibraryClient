<?php
namespace Entities {

    class Book
    {
        private $BookName;
        private $BookStatusId;
        private $Id;
        private $UrlBook;
        private $UrlPicture;
        private $NumberOfDownloads;
        private $Rating;
        private $NumberOfLikes;

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

        /**
         * @return mixed
         */
        public function getUrlBook()
        {
            return $this->UrlBook;
        }

        /**
         * @param mixed $UrlBook
         */
        public function setUrlBook($UrlBook)
        {
            $this->UrlBook = $UrlBook;
        }

        /**
         * @return mixed
         */
        public function getUrlPicture()
        {
            return $this->UrlPicture;
        }

        /**
         * @param mixed $UrlPicture
         */
        public function setUrlPicture($UrlPicture)
        {
            $this->UrlPicture = $UrlPicture;
        }

        /**
         * @return mixed
         */
        public function getNumberOfDownloads()
        {
            return $this->NumberOfDownloads;
        }

        /**
         * @param mixed $NumberOfDownloads
         */
        public function setNumberOfDownloads($NumberOfDownloads)
        {
            $this->NumberOfDownloads = $NumberOfDownloads;
        }

        /**
         * @return mixed
         */
        public function getRating()
        {
            return $this->Rating;
        }

        /**
         * @param mixed $Rating
         */
        public function setRating($Rating)
        {
            $this->Rating = $Rating;
        }

        /**
         * @return mixed
         */
        public function getNumberOfLikes()
        {
            return $this->NumberOfLikes;
        }

        /**
         * @param mixed $NumberOfLikes
         */
        public function setNumberOfLikes($NumberOfLikes)
        {
            $this->NumberOfLikes = $NumberOfLikes;
        }

    }
}