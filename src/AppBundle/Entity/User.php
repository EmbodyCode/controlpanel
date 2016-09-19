<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @UniqueEntity(fields={"email"}, groups={"AppRegistration"}, message="Данный email уже используется")
 * @UniqueEntity(fields={"username"}, groups={"AppRegistration"}, message="Данный логин уже используется")
 */
class User extends BaseUser 
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var \DateTime
     */
    protected $lastLogin;
    
    /**
     * @ORM\Column(name="lastIp", type="string", length=15)
     * @var string $lastIp
     */
    protected $lastIp;

    

    /**
     * @ORM\Column(name="createdAt", type="datetime")
     * @var \Datetime $CreatedAt
     */
    protected $CreatedAt;
    
    public function getCreatedAt()
    {
        return $this->CreatedAt;
    }
    
    public function setCreatedAt($CreatedAt)
    {
        $this->CreatedAt = $CreatedAt;
        return $this;
    }
    
    public function getlastIp(){
        return $this->lastIp;
    }
    
    public function setlastIp($lastIp){
        $this->lastIp = $lastIp;
        return $this;
    }
            

    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->CreatedAt = new \DateTime;

    }
}