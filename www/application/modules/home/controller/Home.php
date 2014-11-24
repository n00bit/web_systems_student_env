<?php


function testComplete()
{
    $r = Router::getInstance();
    $ar1=array('Test','home');
    $ar2=array('Test','cool_callback');
    $ar3=array('Test','riseFunc');
    $ar4=array('Test','home_post');
    $ar5 = array('id' => '\d+', 'cool' => '\d+','rise' => 'wake_up', "end" => "over");

    $r->get('/:rise', $ar3, $ar5);
    $r->get('/user/:id/:cool', $ar1, $ar5);
    $r->get('/:end', $ar2, $ar5);
}


