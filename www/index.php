<?php

// ------ index.php-------------------------
#Подгрузка файла с модулями
include_once 'core/modules/module.load.php';
#Подгрузка модулей роутинга
modules_load_routes();

$r = Router::getInstance();
$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);