<?php
require_once 'zend_autoload.php';
require_once 'kint/Kint.class.php';

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