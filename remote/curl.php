<?php
require_once 'zend_autoload.php';

class Remote {
    const FILE_GET_CONTENTS = 1;
    const CURL = 2;

    protected $_startTime;
    protected $_endTime;

    public static function getMicroTime() {
        return microtime(true);
    }

    public static function getContentByFileGetContents($url) {
        $result = file_get_contents($url);
        return $result;
    }

    public static function getContentByCurl($url) {
        $ch = curl_init();
        $options = array(
            CURLOPT_URL            => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
        );
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public function remoteOpen($url, $type, $loop=10) {
        switch ($type) {
            case self::FILE_GET_CONTENTS:
                $method = 'getContentByFileGetContents';
                break;
            case self::CURL:
                $method = 'getContentByCurl';
                break;
            default:
                throw new Exception('No such type!');
                break;
        }
        $this->_startTime = self::getMicroTime();
        for ($i=0; $i<$loop; $i++) {
            // Zend_Debug::dump('calling method ' . __CLASS__ . '::' . $method . '.');
            $result = self::{$method}($url);
            // Zend_Debug::dump($result);
        }
        $this->_endTime = self::getMicroTime();

        Zend_Debug::dump($this->_endTime - $this->_startTime);
    }


}

$r = new Remote();
$url = 'http://ip.taobao.com/service/getIpInfo.php?ip=210.210.200.200';

//$r->remoteOpen($url, Remote::FILE_GET_CONTENTS);

$r->remoteOpen($url, Remote::CURL);