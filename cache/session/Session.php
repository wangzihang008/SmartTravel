<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace cache\session\Session;

class Session{
    
    protected $_session;
            
    protected function __construct() {
        $this->_session = $_SESSION;
        session_start();
    }
    
    public function getSession(){
        return $this->_session;
    }
    
    public function setSession($attr, $value){
        $this->_session[$attr] = $value;
    }
}
