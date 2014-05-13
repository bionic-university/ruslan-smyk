<?php
/**
 * Created by PhpStorm.
 * User: WINROL
 * Date: 05.05.14
 * Time: 14:23
 */
namespace BionicUniversity\RuslanSmyk\Gardener;

/**
 * Interface WaterableInterface
 * @package BionicUniversity\RuslanSmyk\Gardener
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