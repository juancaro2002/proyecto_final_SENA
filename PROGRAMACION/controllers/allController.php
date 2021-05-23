<?php

class allController {
      
        public function index(){
        require_once('login.php');
    }
    public function log(){
        require_once('logout.php');
    }
    public function login(){
        require_once('login-admin.php');
    }
    public function loginIns(){
        require_once('login.php');
    }

    public function in(){
        require_once('index.php');
    }

}

?>
