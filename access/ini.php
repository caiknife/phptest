<?php
require_once 'zend_autoload.php';
require_once 'Kint/Kint.class.php';

$config = new Zend_Config_Ini('1.ini', 'common');
Zend_Debug::dump($config->toArray());