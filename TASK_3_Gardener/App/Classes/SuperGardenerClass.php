<?php
/**
 * Created by PhpStorm.
 * User: WINROL
 * Date: 06.05.14
 * Time: 18:17
 */

namespace App\Classes;

use App\Classes as NS;

/**
 * Class SuperGardenerClass
 * @package App\Classes
 */
class SuperGardenerClass extends NS\GardenerClass implements NS\FertilisableInterface {

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