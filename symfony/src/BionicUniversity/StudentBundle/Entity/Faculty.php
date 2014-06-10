<?php

namespace BionicUniversity\StudentBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Faculty
 */
class Faculty
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $shortName;

    /**
     * @var string
     */
    private $fullName;

    /**
     * @var University
     */
    private $university;

    /**
     * @var ArrayCollection
     */
    private $cafedras;

    /**
     * @param University $university
     */
    public function setUniversity($university)
    {
        $this->university = $university;
    }

    public function __toString()
    {
        return $this->fullName;
    }


    /**
     * @return Cafedra
     */
    public function getCafedras()
    {
        return $this->cafedras;
    }

    /**
     * @param Cafedra $cafedras
     */
    public function setCafedras($cafedras)
    {
        $this->cafedras = $cafedras;
    }


    public function getUniversity()
    {
        return $this->university;
    }

    public function getUniversityShortName()
    {
        return $this->university->getShortName();
    }

    public function getOtherFaculties()
    {
        return $this->university->getFaculties();
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
     * Set shortName
     *
     * @param string $shortName
     * @return Faculty
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Get shortName
     *
     * @return string 
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     * @return Faculty
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->fullName;
    }
}
