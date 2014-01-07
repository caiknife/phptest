<?php
/**
 * Created by PhpStorm.
 * User: zcai
 * Date: 14-1-7
 * Time: 下午2:35
 */
require_once 'zend_autoload.php';

$iter = new FilesystemIterator(dirname(__DIR__));

foreach ($iter as $file) {
    Kint::dump($file->getPathname(), $file->getType(), $file->isFile());
}
