<?php
/**
 * Created by PhpStorm.
 * User: caiknife
 * Date: 13-12-18
 * Time: 下午4:53
 */

namespace Tracking\Http;

class Request {
    const GET = 'GET';
    const POST = 'POST';
    const DELETE = 'DELETE';
    const PUST = 'PUT';

    protected $_uri;

    public function __construct() {

    }
}