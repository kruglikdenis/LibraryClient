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