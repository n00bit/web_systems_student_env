<?php

// ------ index.php-------------------------
#Подгрузка файла с модулями
include_once 'core/class.router.php';
include_once 'core/modules/module.load.php';
#Подгрузка модулей роутинга
modules_load_routes();
print "ALL IS LOST!\n";

$r = Router::getInstance();
$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);



//$test_array=array(
//    0=>"Test",
//    1=>"teatFunction"
//);

//function test($parametr)
//{
//    if(is_array($parametr))
//    {
//        $test_obj = new $parametr[0]();
//        $test_obj->$parametr[1]();
//    }
//}

//test($test_array);