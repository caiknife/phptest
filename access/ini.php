<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);

require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();

$config = new Zend_Config_Ini('1.ini', 'common');
Zend_Debug::dump($config->toArray());