<?php

// ------ index.php-------------------------
include_once 'core/module/module.load.php';
$r = new Router();
$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);