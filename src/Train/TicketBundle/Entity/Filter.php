<?php

namespace Train\TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Train\TicketBundle\Entity\Filter
 *
 * @ORM\Table(name="filter")
 * @ORM\Entity
 */
class Filter
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var time $filterTimeFrom
     *
     * @ORM\Column(name="filter_time_from", type="time", nullable=false)
     */
    private $filterTimeFrom;

    /**
     * @var time $filterTimeTo
     *
     * @ORM\Column(name="filter_time_to", type="time", nullable=false)
     */
    private $filterTimeTo;

    /**
     * @var boolean $filterTypeL
     *
     * @ORM\Column(name="filter_type_l", type="boolean", nullable=false)
     */
    private $filterTypeL;

    /**
     * @var boolean $filterTypeP
     *
     * @ORM\Column(name="filter_type_p", type="boolean", nullable=false)
     */
    private $filterTypeP;

    /**
     * @var boolean $filterTypeK
     *
     * @ORM\Column(name="filter_type_k", type="boolean", nullable=false)
     */
    private $filterTypeK;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var Ticket
     *
     * @ORM\ManyToOne(targetEntity="Ticket")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ticket_id", referencedColumnName="id")
     * })
     */
    private $ticket;



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
     * Set filterTimeFrom
     *
     * @param time $filterTimeFrom
     */
    public function setFilterTimeFrom($filterTimeFrom)
    {
        $this->filterTimeFrom = $filterTimeFrom;
    }

    /**
     * Get filterTimeFrom
     *
     * @return time 
     */
    public function getFilterTimeFrom()
    {
        return $this->filterTimeFrom;
    }

    /**
     * Set filterTimeTo
     *
     * @param time $filterTimeTo
     */
    public function setFilterTimeTo($filterTimeTo)
    {
        $this->filterTimeTo = $filterTimeTo;
    }

    /**
     * Get filterTimeTo
     *
     * @return time 
     */
    public function getFilterTimeTo()
    {
        return $this->filterTimeTo;
    }

    /**
     * Set filterTypeL
     *
     * @param boolean $filterTypeL
     */
    public function setFilterTypeL($filterTypeL)
    {
        $this->filterTypeL = $filterTypeL;
    }

    /**
     * Get filterTypeL
     *
     * @return boolean 
     */
    public function getFilterTypeL()
    {
        return $this->filterTypeL;
    }

    /**
     * Set filterTypeP
     *
     * @param boolean $filterTypeP
     */
    public function setFilterTypeP($filterTypeP)
    {
        $this->filterTypeP = $filterTypeP;
    }

    /**
     * Get filterTypeP
     *
     * @return boolean 
     */
    public function getFilterTypeP()
    {
        return $this->filterTypeP;
    }

    /**
     * Set filterTypeK
     *
     * @param boolean $filterTypeK
     */
    public function setFilterTypeK($filterTypeK)
    {
        $this->filterTypeK = $filterTypeK;
    }

    /**
     * Get filterTypeK
     *
     * @return boolean 
     */
    public function getFilterTypeK()
    {
        return $this->filterTypeK;
    }

    /**
     * Set user
     *
     * @param Train\TicketBundle\Entity\User $user
     */
    public function setUser(\Train\TicketBundle\Entity\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Train\TicketBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set ticket
     *
     * @param Train\TicketBundle\Entity\Ticket $ticket
     */
    public function setTicket(\Train\TicketBundle\Entity\Ticket $ticket)
    {
        $this->ticket = $ticket;
    }

    /**
     * Get ticket
     *
     * @return Train\TicketBundle\Entity\Ticket 
     */
    public function getTicket()
    {
        return $this->ticket;
    }
}