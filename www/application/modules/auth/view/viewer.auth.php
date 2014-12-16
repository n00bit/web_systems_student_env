<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 14.12.2014
 * Time: 3:19
 */
Class AuthorizationViewer{

    public function showUserHome($id){//вызов построения нужного интерфейса
        for($i=0;$i<100;$i++){
            print "Welcome User No$id";
        }
        include_once "deloginForm.html";
    }

    public function showLoginForm(){//показать форму авторизации
        print "I'm ready, Alex!";
        include_once "loginForm.html";
    }

}