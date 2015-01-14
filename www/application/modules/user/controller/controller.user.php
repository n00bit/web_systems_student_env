<?php
Class UserController{

    private $current_id = null;
    private static $localStorageInfo = array();


    private static function testDataLogin(){
        if(isset($_COOKIE)||isset($_SESSION)){
            return true;
        }
        else return false;
    }


    public function __construct(){
    if(self::testDataLogin()){
        session_start();
        $this->current_id = $_SESSION['id'];
        }
    }

    private function __clone(){

    }

    private function __wakeup(){

    }


}