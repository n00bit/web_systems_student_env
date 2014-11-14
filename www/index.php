<?php

// ------ index.php-------------------------
#Подгрузка файла с модулями
include_once 'core/class.router.php';
include_once 'core/modules/module.load.php';
#Подгрузка модулей роутинга
modules_load_routes();


$r = Router::getInstance();
var_dump($_SERVER['REQUEST_METHOD']);
var_dump($_SERVER['REQUEST_URI']);
$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);