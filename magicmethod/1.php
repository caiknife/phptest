<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);

require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();

class Base {
    public function __construct() {
        Zend_Debug::dump("You are calling a constructor!");
    }

    public function __destruct() {
        Zend_Debug::dump("You are calling a destructor!");
    }
}

$b = new Base();
unset($b);

/**
 * string 'You are calling a constructor!' (length=30)
 * string 'You are calling a destructor!' (length=29)
 */