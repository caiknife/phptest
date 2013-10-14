<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);

require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();

class A {
    public $pubName = 'PubA';

    protected $_proName = 'ProA';

    private $__priName = 'PriA';
}

$a = new A();

Zend_Debug::dump($a->pubName);
// Zend_Debug::dump($a->_proName);
// Zend_Debug::dump($a->__priName);
