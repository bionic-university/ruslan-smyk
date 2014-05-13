<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28.04.14
 * Time: 15:14
 */
namespace BionicUniversity\RuslanSmyk\House;

class AbstractBase {

    protected $height;
    protected $width;

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }




}