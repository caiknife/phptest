<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();

abstract class A {
    public $name = 'A';

    public function hello() {
        Zend_Debug::dump($this->name);
    }
}

$a = new A();