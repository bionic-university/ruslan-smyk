<?php
/**
 * Created by PhpStorm.
 * User: WINROL
 * Date: 05.05.14
 * Time: 14:49
 */
namespace BionicUniversity\RuslanSmyk\Gardener;

/**
 * Class TreeClass
 * @package BionicUniversity\RuslanSmyk\Gardener
 */
class TreeClass extends GardenBaseAbstract {

    /**
     * Колво листьев
     * @var int
     */
    private $leaves;

    /**
     * Колво веток
     * @var int
     */
    private $branches;

    /**
     * Конструктор
     */
    public function __construct()
    {
        $this->name = 'Клен';
        $this->branches = mt_rand(10, 20);
        $this->height = mt_rand(1, 6);
        $this->leaves = mt_rand(200, 500);
    }


    /**
     * Рост дерева
     * @return $this
     */
    public function growth()
    {
        echo 'Tree growth';
        return $this;
    }


    /**
     * Засыхание дерева
     * @return $this
     */
    public function sway()
    {
        echo 'Tree swaying';
        return $this;
    }

    /**
     * @param int $branches
     */
    public function setBranches($branches)
    {
        $this->branches = $branches;
    }

    /**
     * @return int
     */
    public function getBranches()
    {
        return $this->branches;
    }

    /**
     * @param int $leaves
     */
    public function setLeaves($leaves)
    {
        $this->leaves = $leaves;
    }

    /**
     * @return int
     */
    public function getLeaves()
    {
        return $this->leaves;
    }

} 