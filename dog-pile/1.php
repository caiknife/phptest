<?php
$mc = new Memcache();
$mc->addServers(array(
    array('127.0.0.1', 11211, 40),
    array('127.0.0.1', 11212, 30),
    array('127.0.0.1', 11213, 30)
));
$data = $mc->get('cached_key');
if ($mc->getResultCode() === Memcached::RES_NOTFOUND) {
    $data = generateData(); // long-running process
    $mc->set('cached_key', $data, time() + 30);
}
var_dump($data);