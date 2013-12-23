<?php
require_once 'zend_autoload.php';
require_once 'Kint/Kint.class.php';

// 默认不能继承
final class Singleton {
    // 懒汉单例模式
    private static $__instance = null;

    // 构造函数私有化，无法在外部进行实例化
    private function __construct() {

    }

    // __clone魔术方法私有化，不能通过 clone 进行复制
    private function __clone() {

    }

    // 单例模式通过 Singleton::getInstance 方法调用，生成全局唯一的变量
    public static function getInstance() {
        if (is_null(self::$__instance)) {
            self::$__instance = new self();
        }
        return self::$__instance;
    }
}

