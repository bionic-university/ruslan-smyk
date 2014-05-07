<?php
/**
 * Created by PhpStorm.
 * User: WINROL
 * Date: 05.05.14
 * Time: 15:52
 */

namespace App\Classes;

/**
 * Class GardenBaseAbstract
 * @package App\Classes
 */
abstract class GardenBaseAbstract {

    use NameTrait;

    /**
     * Высота
     * @var float
     */
    protected $height = 0.0;

    /**
     * Сухость
     * @var bool
     */
    private $dry = false;

    /**
     * @return mixed
     */
    abstract public function growth();

    /**
     * @return mixed
     */
    abstract public function sway();


    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param boolean $dry
     */
    public function setDry($dry)
    {
        $this->dry = $dry;
    }

    /**
     * @return boolean
     */
    public function getDry()
    {
        return $this->dry;
    }


} 