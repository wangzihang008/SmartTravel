<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace cache\get\Get;

class Get{
    
    protected $_get;
    
    protected function __construct() {
        $this->_get = $_GET;
    }
    
    public function getGet(){
        return $this->_get;
    }
    
    public function setGet($attr, $value){
        $this->_Get[$attr] = $value;
    }
}