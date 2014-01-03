<?php
require_once 'zend_autoload.php';
/**
 * Created by PhpStorm.
 * User: zcai
 * Date: 14-1-3
 * Time: 上午10:32
 */

use Zend\Feed\Reader\Reader;
use Zend\Feed\Reader\Exception\RuntimeException;

$url = 'http://framework.zend.com/manual/2.2/en/modules/zend.feed.find-feeds.html';

try {
    $feedLinks = Reader::findFeedLinks($url);
} catch (RuntimeException $e) {
    Zend_Debug::dump($e->getMessage());
    exit;
}

Kint::dump($feedLinks);

Kint::dump($feedLinks->atom);

Kint::dump($feedLinks->rss);

Kint::dump($feedLinks->rdf);