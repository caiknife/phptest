<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();

$sph = new SphinxClient();
$sph->setServer('localhost', 9312);
$sph->setArrayResult(true);
// $sph->setLimits(0, 20, 1000);
// $sph->setLimits(110, 20, 1000);
// $sph->setMatchMode(SPH_MATCH_ANY);

$result = $sph->query("mozilla", 'dhbPageVisitLogIdx');
Zend_Debug::dump($result['matches']);
// Zend_Debug::dump($result);