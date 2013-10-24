<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();

class A {
    public static function create() {
        return new static();
    }
}

class B extends A {

}

$b = B::create();
Zend_Debug::dump(get_class($b));