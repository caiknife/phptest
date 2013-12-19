<?php
$zf2Path = array_pop((explode(PATH_SEPARATOR, get_include_path())));
require_once $zf2Path . '/Zend/Loader/StandardAutoloader.php';
$loader = new Zend\Loader\StandardAutoloader(array(
    'autoregister_zf' => true,
));
$loader->setFallbackAutoloader(true);
$loader->register();

require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance()->setFallbackAutoloader(true);


//$date = Zend_Date::now();
//Zend_Debug::dump($date->toString());
//Zend_Debug::dump($date->isLeapYear());
//Zend_Debug::dump($date->isToday());
//Zend_Debug::dump($date->isYesterday());
//Zend_Debug::dump($date->isTomorrow());
//
//$currency = new Zend_Currency();
//Zend_Debug::dump($currency->toCurrency());
//Zend_Debug::dump($currency->toCurrency(999));
//Zend_Debug::dump($currency->getCurrencyList());
//$currency->setValue(11233);
//Zend_Debug::dump($currency->toCurrency());
//
//$fig = new Zend_Text_Figlet();
//Zend_Debug::dump($fig->render('CaiKnife'));
//
//$uri = Zend_Uri::factory('http://www.caiknife.com/index.php?name=caiknife&power=acjaif#id');
//Zend_Debug::dump($uri);

$request = new Zend_Http_Client();
$request->setConfig(array(
    'useragent' => 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0',
    ''
));

$request->setUri('http://www.php.net/');

Zend_Debug::dump($request->getUri(true));

$json = <<<JSON
var people = {
    "name": "caiknife",
    "hello": {
        "foo": "1",
        "bar": "2"
    }
};
JSON;

Zend_Debug::dump($json);

use Tracking\Http\Request;

$request = new Request();

$request->asString();

Zend_Debug::dump($request instanceof Request);

Zend_Debug::dump($request instanceof Tracking\Http\Request);

/**
 * migrate ZF1 and ZF2 together
 */

use Zend\Uri\Uri;

$uri = new Uri('http://www.php.net/manual/zh/language.oop5.overloading.php');
Zend_Debug::dump($uri->isValid());
Zend_Debug::dump($uri->isAbsolute());
Zend_Debug::dump($uri->isValidRelative());
Zend_Debug::dump($uri->getScheme());
Zend_Debug::dump($uri->getHost());
Zend_Debug::dump($uri->getPath());

use Zend\Uri\UriFactory;

$uri = UriFactory::factory($uri->toString());
Zend_Debug::dump($uri->isValid());
Zend_Debug::dump($uri->isAbsolute());
Zend_Debug::dump($uri->isValidRelative());
Zend_Debug::dump($uri->getScheme());
Zend_Debug::dump($uri->getHost());
Zend_Debug::dump($uri->getPath());


Zend_Debug::dump(get_include_path());

Zend_Debug::dump(get_included_files());