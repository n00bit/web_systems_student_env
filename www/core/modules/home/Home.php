<?php
$r = Router::getInstance();

$ar1=array('Test','home');

$ar2=array('Test','cool_callback');

$ar3=array('Test','riseFunc');

$ar4=array('Test','home_post');


//$ar6=array(
//    'require' => array('home' => '\$', 'cool' => '\cool$','rise' => '\wake_up$')
//);
$ar5 = array('id' => '\d+', 'cool' => '\d+','rise' => 'wake_up$');

//$r->get('^', $ar2, '$');
//$r->get('^', $ar1, 'cool$');
$r->get('/user/:id/:cool', $ar1, $ar5);
//$r->get('^/:cool', $ar2, $ar5);
//$r->get('^/:rise', $ar3, $ar5);
//$r->post('^/home',$ar4, $ar5);

function home()
{
    print "Hello World";
}

function home_post()
{
    print "Hello World - POST";
}


function cool_callback()
{
    print "Goodbye World";
}

//$r->get('/cool/:id', 'cool_callback2',['require' => [':id' => '\d+']]);

function cool_callback2($id)
{
    print "Hello World $id";
}

