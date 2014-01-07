<?php
require_once 'zend_autoload.php';

class DirectoryTraverser {
    const FILE = 'file';
    const DIR  = 'directory';

    // 当前目录
    protected $_directory;
    // 深度
    protected $_depth;

    public function __construct(DirectoryIterator $directory, $depth=0) {
        if (!($directory instanceof DirectoryIterator)) {
            throw new Exception("Need a DirectoryIterator instance!");
        }
        $this->_directory = $directory;
        $this->_depth = $depth;
    }

    public function dump() {
        foreach ($this->_directory as $fileInfo) {
            // 隐藏目录和上级目录不处理
            if ($fileInfo->isDot() || substr($fileInfo->getFilename(), 0, 1) == '.') {
                continue;
            }
            if ($fileInfo->isFile()) {
                // 如果是文件，直接打印文件名
                $this->dumpFile($fileInfo);
            } elseif ($fileInfo->isDir()) {
                // 如果是目录，打印目录名后深入
                $this->dumpDirectory($fileInfo);
            }
        }
    }

    protected function _dump(DirectoryIterator $fileInfo, $type) {
        if (!($fileInfo instanceof DirectoryIterator)) {
            throw new Exception("Need a DirectoryIterator instance!");
        }
        Zend_Debug::dump(str_repeat(" ", $this->_depth*4)."This is a {$type}: ".$fileInfo->getPathname());
    }

    public function dumpFile(DirectoryIterator $fileInfo) {
        $this->_dump($fileInfo, self::FILE);
    }

    public function dumpDirectory(DirectoryIterator $fileInfo) {
        $this->_dump($fileInfo, self::DIR);
        $dt = new DirectoryTraverser(new DirectoryIterator($fileInfo->getPathname()), $this->_depth+1);
        $dt->dump();
    }
}
$dir = new DirectoryIterator(dirname(__DIR__));
$dt = new DirectoryTraverser($dir);
$dt->dump();