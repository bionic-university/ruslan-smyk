<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28.04.14
 * Time: 14:56
 */

class RoomClass {

    protected $windows = array();
    protected $doors = array();
    protected $floors = array();

    public function addWindow(WindowClass $w){
        array_push($this->windows, $w);
        return $this;
    }

    public function addDoor(DoorClass $d){
        array_push($this->doors, $d);
        return $this;
    }

    public function addFloor(FloorClass $f){
        array_push($this->floors, $f);
        return $this;
    }

    /**
     * @return array
     */
    public function getWindows()
    {
        return $this->windows;
    }

    /**
     * @return array
     */
    public function getDoors()
    {
        return $this->doors;
    }

} 