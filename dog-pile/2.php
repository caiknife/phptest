<?php
function get($key) {
    global $mc;

    $data = $mc->get($key);
    // check if cache exists
    if ($mc->getResultCode() === Memcached::RES_SUCCESS) {
        return $data;
    }

    // add locking
    $mc->add('lock:' . $key, 'locked', 20);
    if ($mc->getResultCode() === Memcached::RES_SUCCESS) {
        $data = generateData();
        $mc->set($key, $data, 30);
    } else {
        while(1) {
            usleep(500000);
            $data = $mc->get($key);
            if ($data !== false){
                break;
            }
        }
    }
    return $data;
}

$data = get('cached_key');

var_dump($data);