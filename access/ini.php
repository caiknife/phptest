<?php
require_once 'zend_autoload.php';

$config = new Zend_Config_Ini('1.ini', 'common');
Zend_Debug::dump($config->toArray());