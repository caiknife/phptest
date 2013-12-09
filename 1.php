<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 'on');
require_once 'kint/Kint.class.php';
require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();

const NAME = 'caiknife';

class A {
    public static function create() {
        return new static();
    }

    public function getName() {
        return NAME;
    }
}

class B extends A {

}

$b = B::create();
Kint::dump(get_class($b));

Kint::dump($b->getName());