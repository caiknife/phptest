<?php
/**
 * Created by PhpStorm.
 * User: zcai
 * Date: 14-2-20
 * Time: 下午12:34
 */
namespace Tracking\Traits;

trait Singleton {
    protected static $_instance = null;

    public static function getInstance() {
        if (static::$_instance === null) {
            static::$_instance = new static();
        }
        return static::$_instance;
    }

    protected function __construct() {

    }

    protected function __clone() {

    }
}