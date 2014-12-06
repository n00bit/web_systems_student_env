<?php

    $ar1 = array('Authorization','authorization');
    $pattern_params_collection = array('author'=>'');

    $router = Router::getInstance();
    $router->post('/:author',$ar1,$pattern_params_collection);
