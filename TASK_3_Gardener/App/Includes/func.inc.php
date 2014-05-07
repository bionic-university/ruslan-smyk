<?php
/**
 * Created by PhpStorm.
 * User: WINROL
 * Date: 07.05.14
 * Time: 17:20
 */

function __autoload($className){

    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';

    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }

    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    if(is_file($fileName))
        require_once $fileName;
    else
        die('file not exists');
}

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