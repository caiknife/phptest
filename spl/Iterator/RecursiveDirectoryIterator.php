<?php
/**
 * Created by PhpStorm.
 * User: zcai
 * Date: 14-1-7
 * Time: 下午2:54
 */
require_once 'zend_autoload.php';

$iter = new RecursiveDirectoryIterator(dirname(__DIR__), RecursiveDirectoryIterator::SKIP_DOTS |
    RecursiveDirectoryIterator::KEY_AS_FILENAME);

Kint::dump($iter->getSubPath(), $iter->getSubPathname(), $iter->getChildren());

foreach ($iter as $key => $file) {
    Kint::dump($key, $file->getPathname());
}

Zend_Debug::dump('----------------');

foreach ($iter->getChildren() as $key => $file) {
    Kint::dump($key, $file->getPathname());
}
