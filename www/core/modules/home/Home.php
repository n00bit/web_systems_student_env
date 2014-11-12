<?php
$r = Router::getInstance();
$r->get('^\/$', 'home');
$r->get('^\/cool$', 'cool_callback');

$r->post('^\/$', 'home_post');


function home () {
print "Hello World";
}

function home_post () {
print "Hello World - POST";
}


function cool_callback() {
print "Hello World 22";
}

$r->get('/cool/:id', 'cool_callback2',['require' => [':id' => '\d+']]);

function cool_callback2($id) {
print "Hello World $id";
}
