<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace cache\cookie\Cookie;

class Cookie{
    
    protected $_cookie;
    
    protected function __construct() {
        $this->_cookie = $_COOKIE;
    }
    
    public function getCookie(){
        return $this->_cookie;
    }
    
    public function setCookie($attr, $value){
        $this->_cookie[$attr] = $value;
    }
    
}