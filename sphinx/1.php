<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();

$sph = new SphinxClient();
$sph->setServer('localhost', 9312);
$sph->setMatchMode(SPH_MATCH_ANY);
$sph->setArrayResult(true);

$result = $sph->query("test doc");
Zend_Debug::dump($result['matches']);
// Zend_Debug::dump($result);

// $result = $sph->query("doc test");
// Zend_Debug::dump($result['matches']);
// Zend_Debug::dump($result);

// $result = $sph->query("你好");
// Zend_Debug::dump($result['matches']);
// Zend_Debug::dump($result);