<?php

namespace Entities {

    class Author
    {
        private $Name;
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

        public function setName($Name)
        {
            $this->Name = $Name;
        }
    }
}