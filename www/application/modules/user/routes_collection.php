<?php


$ar1=array('User','home');
$ar2=array('User','id');
$ar3=array('User','home');
$ar4=array('User','home');
$codes_param = array('userHome'=>'user_home_page','message'=>'message_box');

$r = Router::getInstance();

$r->get('/:userHome', $ar1, $codes_param);
$r->get('/user/:id/:cool', $ar2, $codes_param);
/*
$r->get('/:end', $ar2, $ar5);
$r->any('/:call', $ar6, $ar5);*/
