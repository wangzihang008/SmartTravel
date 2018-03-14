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
    
    protected function __construct(
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
    
    public function getSession(){
        $this->_session->getSession();
    }
    
    public function setSession($attr, $value){
        $this->_session->setSession($attr, $value);
    }
    
    public function getCookie(){
        $this->_cookie->getCookie();
    }
    
    public function setCookie($attr, $value){
        $this->_cookie->setCookie($attr, $value);
    }
    
    public function getRequest(){
        $this->_request->getRequest();
    }
    
    public function setRequest($attr, $value){
        $this->_request->setRequest($attr, $value);
    }
    
    public function getPost(){
        $this->_post->getPost();
    }
    
    public function setPost($attr, $value){
        $this->_post->setPost($attr, $value);
    }
    
    public function getGet(){
        $this->_get->getGet();
    }
    
    public function setGet($attr, $value){
        $this->_get->setGet($attr, $value);
    }
    
    
}