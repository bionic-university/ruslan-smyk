<?php

require_once __DIR__ . '/../bootstrap.php';
use BionicUniversity\RuslanSmyk\Gardener as NS;

/**
 * Читаем из потока STDIN
 * @return string
 */
function readStdin(){
    return trim(fgets(STDIN, 1024));
}

/**
 * Существует ли садовник
 * @return bool
 */
function isObj(){
    global $obj;
    if(!is_object($obj)){
        echo "==> Create new Gardener press 1 !" . PHP_EOL;
        return false;
    }
    return true;
}

/**
 * Проверка работаем ли в консоле
 */
function isCLI(){
    if (PHP_SAPI != 'cli') {
        die('Error! Must be run from the console!');
    }
}

isCLI();

while(true){

    echo PHP_EOL;
    echo '1 - to new Gardener' . PHP_EOL;
    echo '2 - to add Flower' . PHP_EOL;
    echo '3 - to add Tree' . PHP_EOL;
    echo '4 - to add Lawn' . PHP_EOL;
    echo '5 - to getInfo' . PHP_EOL;
    echo '6 - to EXIT' . PHP_EOL;

    switch(readStdin()){

        case '1':
            $time = '';
            while(!intval($time)){
                echo '==> Input time:' . PHP_EOL;
                $time = readStdin();
            }

            $obj = new NS\GardenerClass($time);
            break;

        case '2':
            $obj->addFlower(new NS\FlowerClass);
            echo '==> added 1 Flower' . PHP_EOL;
            break;

        case '3':
            if(isObj()){
                $obj->addTree(new NS\TreeClass);
                echo '==> added 1 Tree' . PHP_EOL;
            }
            break;

        case '4':
            $obj->addLawn(new NS\LawnClass);
            echo '==> added 1 Lawn' . PHP_EOL;
            break;

        case '5':
            if(isObj()){
                $obj->checkPlants();
                echo '==> ' . PHP_EOL;
                $obj->showInfo();
            }
            break;

        case '6':
            //exit
            echo '==> You is out of the script' . PHP_EOL;
            break 2;

        default:
            echo '==> Error case' . PHP_EOL;
            break;

    }
}

/*
$time = '';
while(!intval($time)){
    echo "Input time:" . PHP_EOL;
    $time = readStdin();
}

$obj = new NS\GardenerClass($time);

$obj->addLawn(new NS\LawnClass)
    ->addFlower(new NS\FlowerClass)
    ->addFlower(new NS\FlowerClass)
    ->addTree(new NS\TreeClass)
    ->addFlower(new NS\FlowerClass('Romashka', 'white'));

$obj->checkPlants();

$obj->showInfo();
*/