<?php
/**
 * Created by PhpStorm.
 * User: WINROL
 * Date: 05.05.14
 * Time: 20:18
 */

namespace App\Classes;


/**
 * Class NameTrait
 * @package App\Classes
 */
trait NameTrait {

    /**
     * Имя
     * @var string
     */
    protected $name = '';

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

} 