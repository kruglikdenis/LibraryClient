<?php

namespace Entities {


    class User
    {
        private $Name;
        private $Surname;
        private $Login;
        private $Email;
        private $DateOfBirdth;
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

        public function getObjectVars(){
            return get_object_vars($this);
        }

        public function setId($id)
        {
            $this->Id = $id;
        }

        public function getId()
        {
            return $this->Id;
        }

        public function getName()
        {
            return $this->Name;
        }

        public function getDateOfBirdth()
        {
            return $this->DateOfBirdth;
        }

        public function getEmail()
        {
            return $this->Email;
        }

        public function getLogin()
        {
            return $this->Login;
        }

        public function getSurname()
        {
            return $this->Surname;
        }

        public function setDateOfBirdth($DateOfBirdth)
        {
            $this->DateOfBirdth = $DateOfBirdth;
        }

        public function setEmail($Email)
        {
            $this->Email = $Email;
        }

        public function setLogin($Login)
        {
            $this->Login = $Login;
        }

        public function setName($Name)
        {
            $this->Name = $Name;
        }

        public function setSurname($Surname)
        {
            $this->Surname = $Surname;
        }
    }

}