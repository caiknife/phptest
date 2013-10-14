<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();

class A {
    final public function hello() {
        Zend_Debug::dump($this->name);
    }
}

class B extends A {
    // protected $name = 'B';
}
$a = new A();
$b = new B();

$a->hello();
$b->hello();