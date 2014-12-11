<?php
// ------ index.php-------------------------
#Подгрузка файла с модулями
include_once 'module.load.php';
$loader = new Loader();

var_dump($_COOKIE);

$loader->load_all_modules();

print "EVERYTHING IS LOST, CHIEF, EVERYTHING!!!\n";

$r = Router::getInstance();

$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);








