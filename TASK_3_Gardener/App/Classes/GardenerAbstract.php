<?php
/**
 * Created by PhpStorm.
 * User: WINROL
 * Date: 05.05.14
 * Time: 20:14
 */

namespace App\Classes;

/**
 * Class GardenerAbstract
 * @package App\Classes
 */
abstract class GardenerAbstract {

    use NameTrait;

    /**
     * Засохло ли
     * @var bool
     */
    protected $isDry = false;

    /**
     * timestamp
     * @var int
     */
    protected $time = 0;

    /**
     * @var int
     */
    protected $salary = 0;

    /**
     * Цветы
     * @var array
     */
    protected $flowers = array();

    /**
     * Деревья
     * @var array
     */
    protected $trees = array();

    /**
     * Газоны
     * @var array
     */
    protected $lawns = array();

    /**
     * @return mixed
     */
    abstract public function showInfo();

    /**
     * @param $salary
     * @return $this
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
        return $this;
    }

    /**
     * @return int
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param int $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

} 