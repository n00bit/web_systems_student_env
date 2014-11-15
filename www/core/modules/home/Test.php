<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 14.11.2014
 * Time: 22:06
 */
Class Test
{
    public function __construct(){
        $r = Router::getInstance();
    }

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

    function teatFunction()
    {
        print "CHIERF, ALL IS LOST, CHIERF!!";
    }

    function cool_callback2($id)
    {
        print "Hello World $id";
    }
}