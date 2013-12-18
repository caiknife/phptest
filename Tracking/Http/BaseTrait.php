<?php
/**
 * Created by PhpStorm.
 * User: CaiKnife
 * Date: 13-12-18
 * Time: 下午8:25
 */

namespace Tracking\Http;


trait BaseTrait {
    protected $_name;

    public function asString() {
        \Zend_Debug::dump(__CLASS__);
    }
} 