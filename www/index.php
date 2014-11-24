<?php

// ------ index.php-------------------------
#Подгрузка файла с модулями
include_once 'module.load.php';
#Подгрузка модулей роутинга
$loader = new Loader();
$loader->load_all_modules();

print "EVERYTHING IS LOST, CHIEF, EVERYTHING!!!\n";

//$test_array=array(
//    0=>"Test",
//    1=>"riseFunc"
//);
//
//function test($parametr)
//{
//    if(is_array($parametr))
//    {
//        $test_obj = new $parametr[0]();
//        $test_obj->$parametr[1]();
//    }
//}
//
//test($test_array);

testComplete();

$r = Router::getInstance();
$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);





