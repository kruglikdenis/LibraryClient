<?php

namespace Entities {

    class Role
    {

        private $Name;
        private $Id;

        public function __construct($name)
        {
            $this->Name = $name ;
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

        public function setName($Name)
        {
            $this->Name = $Name;
        }
    }
}