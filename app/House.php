<?php

require_once __DIR__ . '/../bootstrap.php';
use BionicUniversity\RuslanSmyk\House as House;

$house = new House\HouseClass(new House\RoomClass);

$house->getRooms()[0]->addWindow(new House\WindowClass(1, 2, 2))
    ->addDoor(new House\DoorClass(2, 'white', 3))
    ->addFloor(new House\FloorClass(10,2,3));

$house->addRoom(new House\RoomClass)
    ->getRooms()[1]->addWindow(new House\WindowClass(4, 2, 2))
    ->addDoor(new House\DoorClass(3, 'white', 3))
    ->addFloor(new House\FloorClass(10, 2, 3));

var_dump($house);