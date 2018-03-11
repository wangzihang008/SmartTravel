<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace cache\Cache;

use cache\session\Session;
use cache\cookie\Cookie;
use cache\get\Get;
use cache\post\Post;
use cache\request\Request;

class Cache{
    
    protected $_session;
    protected $_request;
    protected $_cookie;
    protected $_get;
    protected $_post;
    
    function __construct(
        Session $session,
        Cookie $cookie,
        Get $get,
        Post $post,
        Request $request
        ) {
            $this->_session = $session;
            $this->_cookie = $cookie;
            $this->_post = $post;
            $this->_get = $get;
            $this->_request = $request;
    }
    
    function getSession(){
        $this->_session->getSession();
    }
    
    function setSession($attr, $value){
        $this->_session->setSession($attr, $value);
    }
    
    function getCookie(){
        $this->_cookie->getCookie();
    }
    
    function setCookie($attr, $value){
        $this->_cookie->setCookie($attr, $value);
    }
    
    function getRequest(){
        $this->_request->getRequest();
    }
    
    function setRequest($attr, $value){
        $this->_request->setRequest($attr, $value);
    }
    
    function getPost(){
        $this->_post->getPost();
    }
    
    function setPost($attr, $value){
        $this->_post->setPost($attr, $value);
    }
    
    function getGet(){
        $this->_get->getGet();
    }
    
    function setGet($attr, $value){
        $this->_get->setGet($attr, $value);
    }
    
    
}