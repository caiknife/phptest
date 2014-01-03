<?php
require_once 'zend_autoload.php';
/**
 * Created by PhpStorm.
 * User: zcai
 * Date: 14-1-3
 * Time: 上午9:58
 */

use Zend\Feed\Reader\Reader;
use Zend\Feed\Reader\Exception\RuntimeException;
// RSS
//$url = 'http://framework.zend.com/blog-rss.xml';
// ATOM
//$url = 'http://framework.zend.com/blog-atom.xml';

$url = 'http://framework.zend.com/security/feed';

try {
    $feedReader = Reader::import($url);
} catch (RuntimeException $e) {
    Zend_Debug::dump($e->getMessage());
    exit;
}

Zend_Debug::dump($feedReader->getTitle());

Zend_Debug::dump($feedReader->getLink());

Zend_Debug::dump($feedReader->getDescription());

Zend_Debug::dump($feedReader->getFeedLink());

foreach ($feedReader as $item) {
    Zend_Debug::dump(get_class($item));

    Zend_Debug::dump($item->getTitle());

    Zend_Debug::dump($item->getLink());

    Zend_Debug::dump($item->getDescription());

    if (method_exists($item, 'getFeedLink')) {
        Zend_Debug::dump($item->getFeedLink());
    }
}
