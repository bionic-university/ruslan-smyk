<?php
/**
 * Created by PhpStorm.
 * User: WINROL
 * Date: 05.05.14
 * Time: 14:39
 */
namespace BionicUniversity\RuslanSmyk\Gardener;

/**
 * Class FlowerClass
 * @package BionicUniversity\RuslanSmyk\Gardener
 */
class FlowerClass extends GardenBaseAbstract {

    /**
     * Лепестки
     * @var int
     */
    private $petals = 0;

    /**
     * Цвет
     * @var string
     */
    private $color = '';

    /**
     * Количество удобрения
     * @var int
     */
    private $fertilizer = 1;

    /**
     * @param string $name
     * @param string $color
     */
    public function __construct($name = 'Rose', $color = 'red')
    {
        $this->name = $name;
        $this->color = $color;
        $this->height = 0.2;
        $this->petals = mt_rand(10, 30);
    }

    /**
     * Рост цветка
     * @return $this
     */
    public function growth()
    {
        echo 'Flower ' . $this->name . ' growth' . PHP_EOL;
        return $this;
    }

    /**
     * Цветок сохнет
     * @return $this
     */
    public function sway()
    {
        echo 'Flower ' . $this->name . ' sway' . PHP_EOL;
        return $this;
    }

    /**
     * Цветок пахнет
     * @return $this
     */
    public function smell()
    {
        echo 'Flower ' . $this->name . ' smell' . PHP_EOL;
        return $this;
    }


    /**
     * @param int $fertilizer
     */
    public function setFertilizer($fertilizer)
    {
        $this->fertilizer = $fertilizer;
    }

    /**
     * @return int
     */
    public function getFertilizer()
    {
        return $this->fertilizer;
    }


    /**
     * @param int $petals
     */
    public function setPetals($petals)
    {
        $this->petals = $petals;
    }

    /**
     * @return int
     */
    public function getPetals()
    {
        return $this->petals;
    }

} 