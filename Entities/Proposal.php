<?php

namespace Entities;


class Proposal
{
    private $Id;
    private $Message;
    private $DatePublication;
    private $UserId;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     */
    public function setId($Id)
    {
        $this->Id = $Id;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param mixed $Message
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
    }

    /**
     * @return mixed
     */
    public function getDatePublication()
    {
        return $this->DatePublication;
    }

    /**
     * @param mixed $DatePublication
     */
    public function setDatePublication($DatePublication)
    {
        $this->DatePublication = $DatePublication;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->UserId;
    }

    /**
     * @param mixed $UserId
     */
    public function setUserId($UserId)
    {
        $this->UserId = $UserId;
    }


}