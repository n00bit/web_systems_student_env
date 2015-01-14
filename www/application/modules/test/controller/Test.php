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


    function testing()
    {
        print "Hello World";
    }

    function home($id)
    {
        print "Hello World $id";
    }

    function homePost()
    {
        print "Hello World - POST";
    }


    function coolCallback()
    {
        print "Goodbye World";
    }

//$r->get('/cool/:id', 'cool_callback2',['require' => [':id' => '\d+']]);

    function teatFunction()
    {
        print "CHIERF, ALL IS LOST, CHIERF!!";
    }

    function riseFunc()
    {
        print "It's a life!";
    }

    function callScream()
    {
        for($i=0;$i<10;$i++) {
            print "ROUTING OR DEATH!!\n";
        }
    }

}