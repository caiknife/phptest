<?php
/**
 * Created by PhpStorm.
 * User: zcai
 * Date: 14-1-2
 * Time: 下午3:16
 */
require_once 'zend_autoload.php';

use Zend\Crypt\BlockCipher;

$blockCypher = BlockCipher::factory('mcrypt', array('algo' =>'aes'));
$blockCypher->setKey('encryption key');
$result = $blockCypher->encrypt('This is a secret message.');

Zend_Debug::dump($result);

Zend_Debug::dump($blockCypher->decrypt($result));