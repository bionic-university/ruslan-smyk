<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28.04.14
 * Time: 15:11
 */

class FloorClass extends  AbstractBase {

    protected $length;

    public function __construct($height, $length, $width)
    {
        $this->height = $height;
        $this->length = $length;
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }


} 