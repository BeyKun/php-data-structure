<?php

/**
 * Title        : ArrayList PHP
 * Description  : ArrayList implementation in PHP
 * Github       : beykun/php-data-structure
 * @author Bayu Rasukma Raga <bayurasukmaraga@gmail.com>
 * @version 1.0.0 | 17 May 2019
 */

class ArrayList {
    private $list = [];

    public function add($key, $value){
        $this->list[$key] = $value;
    }

    public function remove($key){
        if(array_key_exists($key, $this->list)){
            unset($this->list[$key]);
        }
    }

    public function size(){
        return count($this->list);
    }

    public function isEmpty(){
        return empty($this->list);
    }
    
    public function get($key){
       
        if (array_key_exists($key, $this->list)) {
            return $this->list[$key];
        } else {
            throw new RuntimeException("Key doesnt exist!");
        }
        
    }
}