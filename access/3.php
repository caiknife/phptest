<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);

require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();

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
