<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28.04.14
 * Time: 14:47
 */

require_once 'Classes/AbstractBase.php';
require_once 'Classes/DoorClass.php';
require_once 'Classes/WindowClass.php';
require_once 'Classes/FloorClass.php';
require_once 'Classes/RoomClass.php';
require_once 'Classes/DomClass.php';

$dom = new DomClass(new RoomClass);

$dom->getRooms()[0]->addWindow(new WindowClass(1, 2, 2))
     ->addDoor(new DoorClass(2, 'white', 3))
     ->addFloor(new FloorClass(10,2,3));

$dom->addRoom(new RoomClass)
    ->getRooms()[1]->addWindow(new WindowClass(4, 2, 2))
    ->addDoor(new DoorClass(3, 'white', 3))
    ->addFloor(new FloorClass(10, 2, 3));

var_dump($dom);