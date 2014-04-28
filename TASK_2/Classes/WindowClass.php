<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28.04.14
 * Time: 14:18
 */

class WindowClass extends AbstractBase {

    protected $thickness = 0;

    public function __construct($height, $thickness, $width)
    {
        $this->height = $height;
        $this->thickness = $thickness;
        $this->width = $width;
    }


    /**
     * @return int
     */
    public function getThickness()
    {
        return $this->thickness;
    }

    /**
     * @param int $thickness
     */
    public function setThickness($thickness)
    {
        $this->thickness = $thickness;
    }



}