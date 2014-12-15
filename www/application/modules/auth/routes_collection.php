<?php

    function logTest(){
        foreach($_COOKIE as $value){
            if(!is_null($value)){
                include_once "view/deloginForm.html";
                return;
            }
        }
    }
    logTest();


    $ar1 = array('Authorization','baseAuthorization');
    $ar2 = array('Authorization','exitFromAccount');
    $ar3 = array('Authorization','showLoginForm');
    $ar4 = array('Authorization','showLoginFormForDimas');
    $pattern_params_collection = array("author"=>"login","home"=>"home","SpecAuthor"=>"Speclogin");

    $router = Router::getInstance();

    $router->post('/login',$ar1,$pattern_params_collection);
    $router->any('/:home',$ar2,$pattern_params_collection);//В ДАЛЬНЕЙШЕМ POST
    $router->get('/login', $ar3, $ar5);

    $router->get('/LoginShDL', $ar4, $ar5);//маршруты К УНИЧТОЖЕНИЮ
    $router->get('/Speclogin', $ar1, $ar5);//НЕОБХОДИМЫ ДЛЯ АВТОРИЗАЦИИ ЧЕРЕЗ МЕТОД GET ДЛЯ ДИМАСА ШАМРИКА


