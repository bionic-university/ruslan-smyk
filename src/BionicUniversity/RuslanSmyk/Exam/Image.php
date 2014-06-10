<?php
/**
 * Created by PhpStorm.
 * User: bionic
 * Date: 5/14/14
 * Time: 10:44 AM
 */

namespace BionicUniversity\RuslanSmyk\Exam;


class Image extends AbstractResizer implements ImageInterface {

    protected $width;
    protected $height;


    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }


    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }


    //cut image
    public function thumbnail(){

        $h = $this->getHeight();
        $w = $this->getWidth();

        if( $h === $w ){

            echo 'image is good';

        }else{

            $w = round($w/2);
            $h = round($h/2);

            $this->setWidth($w);
            $this->setHeight($h);

            //center image
            $center = $w . '.' .$h;

            echo 'image is resizer; new ' . 'w: ' . $w . ' ; h: ' . $h;

            //resizer image on gd2
            //left $w/2
            //right $w/2
            //top $h/2
            //bottom $h/2

        }
    }


    public function getHeight(){
        return $this->height;
    }

    public function getWidth(){
        return $this->width;
    }


} 