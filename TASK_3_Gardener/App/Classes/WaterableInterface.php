<?php
/**
 * Created by PhpStorm.
 * User: WINROL
 * Date: 05.05.14
 * Time: 14:23
 */

namespace App\Classes;

/**
 * Interface WaterableInterface
 * @package App\Classes
 */
interface WaterableInterface {

    /**
     * @return mixed
     */
    public function waterTrees();

    /**
     * @return mixed
     */
    public function waterFlowers();

    /**
     * @return mixed
     */
    public function waterLawns();

} 