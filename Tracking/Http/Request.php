<?php
/**
 * Created by PhpStorm.
 * User: caiknife
 * Date: 13-12-18
 * Time: 下午4:53
 */

namespace Tracking\Http;

use Tracking\Http\BaseTrait;

class Request {
    use BaseTrait;

    const GET    = 'GET';
    const POST   = 'POST';
    const DELETE = 'DELETE';
    const PUT    = 'PUT';

    protected $_uri;
}