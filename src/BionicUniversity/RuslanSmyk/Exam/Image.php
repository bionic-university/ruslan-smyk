<?php
/**
 * Created by PhpStorm.
 * User: WINROL
 * Date: 05.05.14
 * Time: 14:39
 */
namespace BionicUniversity\RuslanSmyk\Exam;

class Image extends AbstractResizer implements ImageInterface{

    private $height;
    private $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function thumbnail(){

        $w = $this->getWidth();
        $h = $this->getHeight();


        if($w === $h){
            $m = 'image is good';
        }else{

            //center
            $w = round($w/2);
            $h = round($h/2);

            //new
            $this->setWidth($w);
            $this->setHeight($h);

            //resize

            $m = 'image is resizer; w: ' . $w . 'h: ' . $h;
        }

        echo $m;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getHeight(){
        return $this->height;
    }

    public function getWidth(){
        return $this->width;
    }


}