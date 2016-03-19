<?php

namespace Entities {

    class RoleUser
    {
        private $RoleId;
        private $UserId;
        private $Id;

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

        public function getUserId()
        {
            return $this->UserId;
        }

        public function getRoleId()
        {
            return $this->RoleId;
        }

        public function setRoleId($RoleId)
        {
            $this->RoleId = $RoleId;
        }

    }
}