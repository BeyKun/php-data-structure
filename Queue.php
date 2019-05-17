<?php

/**
 * Title        : Queue PHP
 * Description  : Queue implementation in PHP
 * Github       : beykun/php-data-structure
 * @author Bayu Rasukma Raga <bayurasukmaraga@gmail.com>
 * @version 1.0.0 | 17 May 2019
 */

class Queue {
    protected $queue;
    protected $limit;

    public function __construct($limit = 10){
        $this->queue = [];
        $this->limit = $limit;
    }

    public function enqueue($item){
        if (count($this->queue) <  $this->queue) {
            array_unshift($this->queue, $item);
        } else {
            throw new RuntimeException('Queue is Full!');
        }
    }

    public function dequeue(){
        if($this->isEmpty()){
            throw new RuntimeException('dequeue is Empety!');
        } else {
            return array_pop($this->queue);
        }
    }
    
    public function get(){
        return $this->queue;
    }

    public function bottom(){
        return end($this->queue);
    }

    public function isEmpty(){
        return empty($this->queue);
    }
}