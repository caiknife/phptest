<?php
require_once 'zend_autoload.php';

abstract class A {
    public $name = 'A';

    public function hello() {
        Zend_Debug::dump($this->name);
    }
}

$a = new A();