<?php

// Below is a php built-in function that call another function
spl_autoload_register('autoloader');

// Below is a user defined function that load all file in the Classes folder into the the defined function
function autoloader($class) {
    
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(strpos($url, 'Inc') !== false) {

        $path = '../Classes/';
    } else {

        $path = 'Classes/';
    }

    $ext = '.class.php';

    $fullpath = $path . $class . $ext;

    include $fullpath;
}