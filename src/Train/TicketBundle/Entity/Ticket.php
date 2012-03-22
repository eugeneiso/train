<?php

namespace Train\TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Train\TicketBundle\Entity\Ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity
 */
class Ticket
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
     * @var date $ticketDate
     *
     * @ORM\Column(name="ticket_date", type="date", nullable=false)
     */
    private $ticketDate;

    /**
     * @var integer $ticketDep
     *
     * @ORM\Column(name="ticket_dep", type="integer", nullable=false)
     */
    private $ticketDep;

    /**
     * @var integer $ticketArr
     *
     * @ORM\Column(name="ticket_arr", type="integer", nullable=false)
     */
    private $ticketArr;



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
     * Set ticketDate
     *
     * @param date $ticketDate
     */
    public function setTicketDate($ticketDate)
    {
        $this->ticketDate = $ticketDate;
    }

    /**
     * Get ticketDate
     *
     * @return date 
     */
    public function getTicketDate()
    {
        return $this->ticketDate;
    }

    /**
     * Set ticketDep
     *
     * @param integer $ticketDep
     */
    public function setTicketDep($ticketDep)
    {
        $this->ticketDep = $ticketDep;
    }

    /**
     * Get ticketDep
     *
     * @return integer 
     */
    public function getTicketDep()
    {
        return $this->ticketDep;
    }

    /**
     * Set ticketArr
     *
     * @param integer $ticketArr
     */
    public function setTicketArr($ticketArr)
    {
        $this->ticketArr = $ticketArr;
    }

    /**
     * Get ticketArr
     *
     * @return integer 
     */
    public function getTicketArr()
    {
        return $this->ticketArr;
    }
}