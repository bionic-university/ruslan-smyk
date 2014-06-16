<?php

namespace RuslanSmyk\RectalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fund
 */
class Fund
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateUnfitness;

    /**
     * @var string
     */
    private $why;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateUnfitness
     *
     * @param \DateTime $dateUnfitness
     * @return Fund
     */
    public function setDateUnfitness($dateUnfitness)
    {
        $this->dateUnfitness = $dateUnfitness;
    
        return $this;
    }

    /**
     * Get dateUnfitness
     *
     * @return \DateTime 
     */
    public function getDateUnfitness()
    {
        return $this->dateUnfitness;
    }

    /**
     * Set why
     *
     * @param string $why
     * @return Fund
     */
    public function setWhy($why)
    {
        $this->why = $why;
    
        return $this;
    }

    /**
     * Get why
     *
     * @return string 
     */
    public function getWhy()
    {
        return $this->why;
    }
}
