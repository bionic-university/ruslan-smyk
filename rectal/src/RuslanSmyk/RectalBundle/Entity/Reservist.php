<?php

namespace RuslanSmyk\RectalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservist
 */
class Reservist
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateIn;

    /**
     * @var \DateTime
     */
    private $dateOut;

	private $unit;

	/**
     * @var string
     */
	private $draftee;
	
	/**
     * @return mixed
     */
    public function getDraftee()
    {
        return $this->draftee;
    }
	
	public function getDrafteeId()
    {
        return $this->draftee->getId();
    }
    /**
     * @param mixed $draftee
     */
    public function setDraftee($draftee)
    {
        $this->draftee = $draftee;
    }
	
    /**
     * @return mixed
     */
    public function getUnit()
    {
        return $this->unit;
    }

	public function getUnitId()
    {
        return $this->unit->getId();
    }
	
    /**
     * @param mixed $unit
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    }
	
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
     * Set dateIn
     *
     * @param \DateTime $dateIn
     * @return Reservist
     */
    public function setDateIn($dateIn)
    {
        $this->dateIn = $dateIn;
    
        return $this;
    }

    /**
     * Get dateIn
     *
     * @return \DateTime 
     */
    public function getDateIn()
    {
        return $this->dateIn;
    }

    /**
     * Set dateOut
     *
     * @param \DateTime $dateOut
     * @return Reservist
     */
    public function setDateOut($dateOut)
    {
        $this->dateOut = $dateOut;
    
        return $this;
    }

    /**
     * Get dateOut
     *
     * @return \DateTime 
     */
    public function getDateOut()
    {
        return $this->dateOut;
    }
}
