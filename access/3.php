<?php
require_once 'zend_autoload.php';
require_once 'kint/Kint.class.php';

class A {
    public static $name;
}

class B extends A {
    public static $name;
}

A::$name = "A";
Zend_Debug::dump(A::$name);
Zend_Debug::dump(B::$name);

B::$name = "B";
Zend_Debug::dump(A::$name);
Zend_Debug::dump(B::$name);
