<?php
// ------ index.php-------------------------
#Подгрузка файла с модулями
include_once 'module.load.php';
$loader = new Loader();

$loader->load_all_modules();

print "EVERYTHING IS LOST, CHIEF, EVERYTHING!!!\n";


var_dump(date("Y-m-d"));

$r = Router::getInstance();
$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);








