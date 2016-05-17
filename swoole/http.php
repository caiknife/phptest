<?php
/**
 * Created by PhpStorm.
 * User: caiknife
 * Date: 16/4/21
 * Time: 11:22
 */

require_once 'zend_autoload.php';

$http = new swoole_http_server('127.0.0.1', 9527);
$http->on('request', function (swoole_http_request $request, swoole_http_response $response) {
    $response->end("<h1>Hello Swoole.</h1>");
});
$http->start();
