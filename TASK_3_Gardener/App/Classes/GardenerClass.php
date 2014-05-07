<?php
/**
 * Created by PhpStorm.
 * User: WINROL
 * Date: 05.05.14
 * Time: 14:37
 */

namespace App\Classes;

use App\Classes as NS;

/**
 * Class GardenerClass
 * @package App\Classes
 */
class GardenerClass extends NS\GardenerAbstract implements NS\WaterableInterface {

    /**
     * Конструктор GardenerClass
     * @param $time
     * @param string $name
     * @param int $salary
     */
    public function __construct($time, $name = 'Petro', $salary = 500)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->time = $time;
    }

    /**
     * Проверяем на сухость или политость
     * @return $this
     */
    public function checkPlants()
    {
        if($this->getCountPlants() > 0){

            $this->isDry = false;

            if($this->time % 3 === 0){

                $this->isDry = true;

                if(!empty($this->flowers)){
                    foreach($this->flowers as $obj1){
                        $obj1->setDry(true);
                    }
                }
                if(!empty($this->trees)){
                    foreach($this->trees as $obj2){
                        $obj2->setDry(true);
                    }
                }

                if(!empty($this->lawns)){
                    foreach($this->lawns as $obj3){
                        $obj3->setDry(false);
                    }
                }

            }else{
                 $this->waterFlowers()
                      ->waterTrees()
                      ->waterLawns();
            }
        }

        return $this;
    }

    /**
     * Садим цветок
     * @param FlowerClass $obj
     * @return $this
     */
    public function addFlower(FlowerClass $obj)
    {
        array_push($this->flowers, $obj);

        return $this;
    }

    /**
     * Садим дерево
     * @param TreeClass $obj
     * @return $this
     */
    public function addTree(TreeClass $obj)
    {
        array_push($this->trees, $obj);

        return $this;
    }

    /**
     * Садим газон
     * @param LawnClass $obj
     * @return $this
     */
    public function addLawn(LawnClass $obj)
    {
        array_push($this->lawns, $obj);

        return $this;
    }

    /**
     * Поливаем цветы
     * @return $this
     */
    public function waterFlowers()
    {
        if(!empty($this->flowers))
            foreach($this->flowers as $obj1){
                $obj1->setDry(true);
            }
        return $this;
    }

    /**
     * Поливаем деревья
     * @return $this
     */
    public function waterTrees()
    {
        if(!empty($this->trees)){
            foreach($this->trees as $obj){
                $obj->setDry(false);
            }
        }
        return $this;
    }

    /**
     * Поливаем газоны
     * @return $this
     */
    public function waterLawns()
    {
        if(!empty($this->lawns)){
            foreach($this->lawns as $obj){
                $obj->setDry(false);
            }
        }

        return $this;
    }

    /**
     * Показуем все информацию
     * @return $this
     */
    public function showInfo()
    {
        $out = $this->isDry ? 'Dried' : 'Watered';
        echo  $out . ' plants are:' . $this->getCountPlants() . PHP_EOL;
        echo  'Flowers :' . $this->getCountFlowers() . PHP_EOL;
        echo  'Trees :' . $this->getCountTrees() . PHP_EOL;
        echo  'Lawns :' . $this->getCountLawns() . PHP_EOL;

        return $this;
    }

    /**
     * Считаем количество цветов
     * @return int
     */
    public function getCountFlowers(){
        return count($this->flowers);
    }

    /**
     * Считаем количество деревьев
     * @return int
     */
    public function getCountTrees(){
        return count($this->trees);
    }

    /**
     * Считаем количество газонов
     * @return int
     */
    public function getCountLawns(){
        return count($this->lawns);
    }

    /**
     * Считаем количество растений
     * @return int
     */
    public function getCountPlants(){
        return $this->getCountFlowers() + $this->getCountTrees() + $this->getCountLawns();
    }

} 