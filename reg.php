<?php
require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();

$url = 'http://p.yiqifa.com/c?s=7a57e1c6&w=430&c=7098&i=37686&l=0&e=&t=http://www.6666688888.com/product/205242.html?source=smartercn&outgoingid=f1512110413o53201eed95ccc';

$outgoingParamPattern =  '/&outgoingid=[^&]*/i';
$url = preg_replace($outgoingParamPattern, '', $url);

Zend_Debug::dump($url);
