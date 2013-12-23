<?php
require_once 'zend_autoload.php';
require_once 'Kint/Kint.class.php';

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