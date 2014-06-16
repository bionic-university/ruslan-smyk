<?php

namespace RuslanSmyk\RectalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Draftee
 */
class Draftee
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $patronymic;

    /**
     * @var string
     */
    private $address;

    /**
     * @var \DateTime
     */
    private $birthday;

    /**
     * @var integer
     */
    private $inn;

    /**
     * @var string
     */
    private $passport;
	
	/**
     * @var string
     */
	private $fund;
	
	public function __toString()
    {
        return $this->name . ' ' . $this->lastName. ' ' . $this->patronymic;
    }
	
	/**
     * @return mixed
     */
    public function getFund()
    {
        return $this->fund;
    }

    /**
     * @param mixed $fund
     */
    public function setFund($fund)
    {
        $this->fund = $fund;
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
     * Set name
     *
     * @param string $name
     * @return Draftee
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Draftee
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set patronymic
     *
     * @param string $patronymic
     * @return Draftee
     */
    public function setPatronymic($patronymic)
    {
        $this->patronymic = $patronymic;

        return $this;
    }

    /**
     * Get patronymic
     *
     * @return string 
     */
    public function getPatronymic()
    {
        return $this->patronymic;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Draftee
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Draftee
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set inn
     *
     * @param integer $inn
     * @return Draftee
     */
    public function setInn($inn)
    {
        $this->inn = $inn;

        return $this;
    }

    /**
     * Get inn
     *
     * @return integer 
     */
    public function getInn()
    {
        return $this->inn;
    }

    /**
     * Set passport
     *
     * @param string $passport
     * @return Draftee
     */
    public function setPassport($passport)
    {
        $this->passport = $passport;

        return $this;
    }

    /**
     * Get passport
     *
     * @return string 
     */
    public function getPassport()
    {
        return $this->passport;
    }
}
