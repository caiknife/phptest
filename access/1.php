<?php
require_once 'zend_autoload.php';

class A {
    public $pubName = 'PubA';

    protected $_proName = 'ProA';

    private $__priName = 'PriA';
}

$a = new A();

Zend_Debug::dump($a->pubName);
// Zend_Debug::dump($a->_proName);
// Zend_Debug::dump($a->__priName);
