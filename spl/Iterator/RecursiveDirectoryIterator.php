<?php
/**
 * Created by PhpStorm.
 * User: zcai
 * Date: 14-1-7
 * Time: 下午2:54
 */
require_once 'zend_autoload.php';

$iter = new RecursiveDirectoryIterator(dirname(__DIR__), RecursiveDirectoryIterator::SKIP_DOTS);

Kint::dump($iter->getSubPath(), $iter->getSubPathname(), $iter->getChildren());

foreach ($iter as $file) {
    Kint::dump($file->getPathname());
}

foreach ($iter->getChildren() as $file) {
    Kint::dump($file->getPathname());
}
