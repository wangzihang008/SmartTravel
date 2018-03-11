<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace cache\post\Post;

class Post{
    
    protected $_post;
    
    function __construct() {
        $this->_post = $_POST;
    }
    
    function getPost(){
        return $this->_post;
    }
    
    function setPost($attr, $value){
        $this->_post[$attr] = $value;
    }
}