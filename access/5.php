<?php
require_once 'zend_autoload.php';
require_once 'Kint/Kint.class.php';

abstract class A {
    public $name = 'A';

    public function hello() {
        Zend_Debug::dump($this->name);
    }
}

$a = new A();