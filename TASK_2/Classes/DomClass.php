<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28.04.14
 * Time: 15:47
 */

class DomClass {

    protected $rooms = array();

    public function __construct(RoomClass $r)
    {
        $this->addRoom($r);
    }


    public function addRoom(RoomClass $r){
        array_push($this->rooms, $r);
        return $this;
    }

    /**
     * @return array
     */
    public function getRooms()
    {
        return $this->rooms;
    }



} 