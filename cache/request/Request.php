<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace cache\request\Request;

class Request{
    
    protected $_request;
    
    function __construct() {
        $this->_request = $_REQUEST;
    }
    
    function getRequest(){
        return $this->_request;
    }
    
    function setRequest($attr, $value){
        $this->_request[$attr] = $value;
    }
}