<?php
require_once 'zend_autoload.php';
require_once 'kint/Kint.class.php';

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

