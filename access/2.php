<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);

require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();

class A {
    public $pubName = 'PubA';

    protected $_proName = 'ProA';

    private $__priName = 'PriA';

    public function publicDump() {
        Zend_Debug::dump($this->pubName);
        Zend_Debug::dump($this->_proName);
        Zend_Debug::dump($this->__priName);
    }
}

class B extends A {

    public function publicDump() {
        parent::publicDump();

        Zend_Debug::dump($this->pubName);
        Zend_Debug::dump($this->_proName);
        Zend_Debug::dump($this->__priName);
    }

}

$b = new B();
$b->publicDump();