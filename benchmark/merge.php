<?php
/**
 * Created by PhpStorm.
 * User: CaiKnife
 * Date: 14-3-23
 * Time: 下午11:13
 *
 * 比较 + 和 array_merge() 做数组合并的性能
 */

class Benchmark {
    protected $_timeStart = null;
    protected $_timeEnd   = null;

    protected $_repeatTimes = null;

    protected $_mergers = array();

    public function __construct() {
        $this->_repeatTimes = 10000;
    }

    public function setRepeatTimes($repeatTimes) {
        $this->_repeatTimes = $repeatTimes;
        return $this;
    }

    public function addMerger(Merger $merger) {
        $this->_mergers[] = $merger;
        return $this;
    }

    public function bench() {
        foreach ($this->_mergers as $merger) {
            $this->_invokeMerger($merger);
        }
    }

    protected function _invokeMerger(Merger $merger) {
        $this->_timeStart = microtime(true);
        for ($i = 0; $i < $this->_repeatTimes; ++$i) {
            $merger->format();
        }
        $this->_timeEnd = microtime(true);

        var_dump($this->_timeEnd - $this->_timeStart);
    }
}

abstract class Merger {
    protected $_firstArray = array();
    protected $_secondArray = array();
    protected $_result = array();

    public function __construct($firstArray = array(), $secondArray = array()) {
        $this->_firstArray = $firstArray;
        $this->_secondArray = $secondArray;
    }

    abstract public function format();
}

class PlusMerger extends Merger {
    public function format() {
        $this->_result = $this->_firstArray + $this->_secondArray;
    }
}

class ArrayMergeMerger extends Merger {
    public function format() {
        $this->_result = array($this->_firstArray, $this->_secondArray);
    }
}

$benchmark = new Benchmark();
$benchmark->addMerger(new PlusMerger([0 => 'cai'], [1 => 'knife']))
          ->addMerger(new ArrayMergeMerger([0 => 'cai'], [1 => 'knife']));

$benchmark->bench();

