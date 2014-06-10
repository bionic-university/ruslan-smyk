<?php
/**
 * Created by PhpStorm.
 * User: WINROL
 * Date: 05.05.14
 * Time: 14:49
 */
namespace BionicUniversity\RuslanSmyk\Gardener;

/**
 * Class LawnClass
 * @package BionicUniversity\RuslanSmyk\Gardener
 */
class LawnClass extends GardenBaseAbstract {

    /**
     * Плошадь
     * @var int
     */
    private  $area = 35;

    /**
     * Тип травы газона
     * @var string
     */
    private  $grass = 'Декорaтивная';

    /**
     * Конструктор
     */
    public function __construct()
    {
        $this->name = 'Газон ' . uniqid();
        $this->height = 0.1;
    }

    /**
     * Рост газона
     * @return $this
     */
    public function growth()
    {
        echo 'Lawn growth';
        return $this;
    }

    /**
     * Рост газона
     * @return $this
     */
    public function sway()
    {
        echo 'Lawn swaying';
        return $this;
    }

    /**
     * @param string $grass
     */
    public function setGrass($grass)
    {
        $this->grass = $grass;
    }

    /**
     * @return string
     */
    public function getGrass()
    {
        return $this->grass;
    }

    /**
     * @param int $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return int
     */
    public function getArea()
    {
        return $this->area;
    }

} 