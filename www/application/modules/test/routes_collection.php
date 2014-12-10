<?php

    function logTest(){
        foreach($_COOKIE as $value){
            if(!is_null($value)){
                include_once "Form2.html";
                return;
            }
        }
    }

logTest();

    $r = Router::getInstance();
    $ar1=array('Test','home');
    $ar2=array('Test','coolCallback');
    $ar3=array('Test','riseFunc');
    $ar4=array('Test','homePost');
    $ar6=array('Test','callScream');
    $ar7=array('Test','veiwForms');

    $ar5 = array('id' => '\d+', 'cool' => '\d+','rise' => 'wake_up', "end" => "fall", "call" => "scream", "author" => "login");

    $r->get('/:rise', $ar3, $ar5);
    $r->get('/user/:id/:cool', $ar1, $ar5);
    $r->get('/:end', $ar2, $ar5);
    $r->any('/:call', $ar6, $ar5);
    $r->get('/:author', $ar7, $ar5);

