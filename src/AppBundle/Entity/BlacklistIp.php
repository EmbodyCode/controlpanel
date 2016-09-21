<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * BlacklistIp
 *
 * @ORM\Table()
 * @ORM\Entity
 * @UniqueEntity("ip",message="IP уже заблокирован")
 * 
 */
class BlacklistIp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
     * @ORM\Column(name="ip", type="string", length=15)
     * @var string $ip
      * @Assert\NotBlank(message="IP не может быть пустым")
      * @Assert\Ip
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=700)
     * @Assert\NotBlank(message="Причина не может быть пустой")
     */
    private $reason;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="unbanDate", type="datetimetz")
     */
    private $unbanDate;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ip
     *
     * @param seting $ip
     *
     * @return BlacklistIp
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set reason
     *
     * @param string $reason
     *
     * @return BlacklistIp
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set unbanDate
     *
     * @param \DateTime $unbanDate
     *
     * @return BlacklistIp
     */
    public function setUnbanDate($unbanDate)
    {
        $this->unbanDate = $unbanDate;

        return $this;
    }

    /**
     * Get unbanDate
     *
     * @return \DateTime
     */
    public function getUnbanDate()
    {
        return $this->unbanDate;
    }
}
