<?php
require_once 'zend_autoload.php';
require_once 'Kint/Kint.class.php';

$sph = new SphinxClient();
$sph->setServer('localhost', 9312);
$sph->setArrayResult(true);
// $sph->setLimits(0, 20, 1000);
// $sph->setLimits(110, 20, 1000);
// $sph->setMatchMode(SPH_MATCH_ANY);

$result = $sph->query("mozilla", 'dhbPageVisitLogIdx');
Zend_Debug::dump($result['matches']);
// Zend_Debug::dump($result);