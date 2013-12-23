<?php
require_once 'zend_autoload.php';
require_once 'Kint/Kint.class.php';

class Base {
    public function __construct() {
        Zend_Debug::dump("You are calling a constructor!");
    }

    public function __destruct() {
        Zend_Debug::dump("You are calling a destructor!");
    }
}

$b = new Base();
unset($b);

/**
 * string 'You are calling a constructor!' (length=30)
 * string 'You are calling a destructor!' (length=29)
 */