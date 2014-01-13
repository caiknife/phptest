<?php
require_once 'zend_autoload.php';

use \Zend\Debug\Debug;

Debug::dump(Zend_Version::VERSION);

Debug::dump(Zend\Version\Version::VERSION);

$date = Zend_Date::now();
Debug::dump($date->toString());
Debug::dump($date->isLeapYear());
Debug::dump($date->isToday());
Debug::dump($date->isYesterday());
Debug::dump($date->isTomorrow());

$currency = new Zend_Currency();
Debug::dump($currency->toCurrency());
Debug::dump($currency->toCurrency(999));
Debug::dump($currency->getCurrencyList());
$currency->setValue(11233);
Debug::dump($currency->toCurrency());

$fig = new Zend_Text_Figlet();
Debug::dump($fig->render('CaiKnife'));

$uri = Zend_Uri::factory('http://www.caiknife.com/index.php?name=caiknife&power=acjaif#id');
Debug::dump($uri);

$request = new Zend_Http_Client();
$request->setConfig(array(
    'useragent' => 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0',
));

$request->setUri('http://www.php.net/');

Debug::dump($request->getUri(true));

$json = <<<JSON
var people = {
    "name": "caiknife",
    "hello": {
        "foo": "1",
        "bar": "2"
    }
};
JSON;

Debug::dump($json);

use Tracking\Http\Request;

$request = new Request();

$request->asString();

Debug::dump($request instanceof Request);

Debug::dump($request instanceof Tracking\Http\Request);

/**
 * migrate ZF1 and ZF2 together
 */

use Zend\Uri\Uri;

$uri = new Uri('http://www.php.net/manual/zh/language.oop5.overloading.php');
Debug::dump($uri->isValid());
Debug::dump($uri->isAbsolute());
Debug::dump($uri->isValidRelative());
Debug::dump($uri->getScheme());
Debug::dump($uri->getHost());
Debug::dump($uri->getPath());

use Zend\Uri\UriFactory;

$uri = UriFactory::factory($uri->toString());
Debug::dump($uri->isValid());
Debug::dump($uri->isAbsolute());
Debug::dump($uri->isValidRelative());
Debug::dump($uri->getScheme());
Debug::dump($uri->getHost());
Debug::dump($uri->getPath());


Debug::dump(get_include_path());

Debug::dump(get_included_files());

/**
 * use ZF2 http client
 */
use Zend\Http\Client;

$client = new Client('http://www.php.net');
$response = $client->send();

Debug::dump($response->getBody());