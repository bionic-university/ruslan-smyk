<?php

namespace RuslanSmyk\RectalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unit
 */
class Unit
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $disposition;
	
	/**
     * @var string
     */
	private $reservistas;
	
	public function __toString()
    {
        return $this->title;
    }
	
	/**
     * @return mixed
     */
    public function getReservistas()
    {
        return $this->reservistas;
    }

    /**
     * @param mixed $reservistas
     */
    public function setReservistas($reservistas)
    {
        $this->reservistas = $reservistas;
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
     * Set title
     *
     * @param string $title
     * @return Unit
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set disposition
     *
     * @param string $disposition
     * @return Unit
     */
    public function setDisposition($disposition)
    {
        $this->disposition = $disposition;
    
        return $this;
    }

    /**
     * Get disposition
     *
     * @return string 
     */
    public function getDisposition()
    {
        return $this->disposition;
    }
}
