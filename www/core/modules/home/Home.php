<?php
$r = Router::getInstance();

$r->get('^', $ar2,$ar4);
$r->get('^', $ar1,$ar5);
$r->post('^',$ar3,'$');

//$r->post('^', 'home_post','$');
//
//$r->get('^','home','$');
//$r->get('^','cool_callback','cool$');




$ar1=array(
    0=>'Test',
    1=>'cool_callback'
);

$ar2=array('Test','home');

$ar3=array(
    0=>'Test',
    1=>'home_post'
);

$ar4=array('$');

$ar5=array('cool$');

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

