<?php

namespace Train\TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * Train\TicketBundle\Entity\User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    
    /**
     * Filters created by user
     *
     * @var ArrayCollection 
     * 
     * @ORM\OneToMany(targetEntity="Filter", mappedBy="user")
     */
    private $filters;

    public function __construct()
    {
        $this->filters = new ArrayCollection();
        parent::__construct();
    }

}