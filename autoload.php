<?php
/**
 * Created by PhpStorm.
 * User: zcai
 * Date: 14-1-7
 * Time: 上午9:55
 */

require_once 'kint/Kint.class.php';

Kint::dump(PHP_VERSION);

Kint::dump(version_compare(PHP_VERSION, '5.3', '<'));

Kint::dump(version_compare('5.3.0', '5.3', '<'));

if (version_compare(PHP_VERSION, '5.3', '<')) {
    require_once 'Zend/Loader/Autoloader.php';
    Zend_Loader_Autoloader::getInstance()->setFallbackAutoloader(true);
} else {
    require_once 'Zend2/Loader/StandardAutoloader.php';
    $loader = new Zend\Loader\StandardAutoloader(array(
        Zend\Loader\StandardAutoloader::AUTOREGISTER_ZF => true,
        Zend\Loader\StandardAutoloader::ACT_AS_FALLBACK => true,
    ));
    $loader->register();
}