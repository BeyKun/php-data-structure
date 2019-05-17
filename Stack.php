<?php

/**
 * Title        : Stack PHP
 * Description  : Stack implementation in PHP
 * Github       : beykun/php-data-structure
 * @author Bayu Rasukma Raga <bayurasukmaraga@gmail.com>
 * @version 1.0.0 | 17 May 2019
 */

class Stack {
    protected $stack;
    protected $limit;

    public function __construct($limit = 10){
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($item){
        if (count($this->stack) <  $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new RuntimeException('Stack is Full!');
        }
    }

    public function pop(){
        if($this->isEmpty()){
            throw new RuntimeException('Stack is Empety!');
        } else {
            return array_shift($this->stack);
        }
    }

    public function getStack(){
        return $this->stack;
    }

    public function top(){
        return current($this->stack);
    }

    public function isEmpty(){
        return empty($this->stack);
    }
}
