<?php
/**
 * Created by PhpStorm.
 * User: zcai
 * Date: 14-1-8
 * Time: 下午5:35
 */
require_once 'zend_autoload.php';

Kint::dump(spl_autoload_functions());

Kint::dump(spl_autoload_extensions());

Kint::dump(spl_classes());