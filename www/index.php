<?php

// ------ index.php-------------------------
include_once 'core/class.router.php';
$r = new Router();
$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);