<?php
$r = Router::getInstance();

//$r->get('^', ['Test','home'],'$');
//$r->get('^', ['Test','cool_callback'],'cool$');


$r->post('^', 'home_post','$');

$r->get('^','home','$');
$r->get('^','cool_callback','cool$');

//$r->post('^','home_post','$');

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

