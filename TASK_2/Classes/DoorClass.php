<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28.04.14
 * Time: 15:12
 */

class DoorClass extends AbstractBase{

    protected $color;

    public function __construct($height, $color, $width)
    {
        $this->height = $height;
        $this->color = $color;
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

} 