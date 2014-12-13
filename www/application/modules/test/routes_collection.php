<?php

    $r = Router::getInstance();
    $ar1=array('Test','home');
    $ar2=array('Test','coolCallback');
    $ar3=array('Test','riseFunc');
    $ar4=array('Test','homePost');
    $ar6=array('Test','callScream');

    $ar5 = array('id' => '\d+', 'cool' => '\d+','rise' => 'wake_up', "end" => "fall", "call" => "scream");

    $r->get('/:rise', $ar3, $ar5);
    $r->get('/user/:id/:cool', $ar1, $ar5);
    $r->get('/:end', $ar2, $ar5);
    $r->any('/:call', $ar6, $ar5);


