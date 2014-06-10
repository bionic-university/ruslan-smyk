<?php
/**
 * Created by PhpStorm.
 * User: WINROL
 * Date: 06.05.14
 * Time: 18:17
 */
namespace BionicUniversity\RuslanSmyk\Gardener;

/**
 * Class SuperGardenerClass
 * @package BionicUniversity\RuslanSmyk\Gardener
 */
class SuperGardenerClass extends GardenerClass implements FertilisableInterface {

    /**
     * Удобряет цветы
     * @return $this
     */
    public function fertiliseFlowers()
    {
        if(!empty($this->flowers)){
            foreach($this->flowers as $obj1){
                $obj1->setFertilizer(12);
            }
        }

        return $this;
    }
} 